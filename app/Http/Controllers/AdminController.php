<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\autorepair_users;
use App\Models\Categories;
use App\Models\Stocks;
use App\Models\Repairs;
use App\Models\Factures;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;





class AdminController extends Controller
{
    public function dashboard(){
        $startOfWeek = Carbon::now()->startOfWeek();  // Monday
        $endOfWeek = Carbon::now()->endOfWeek();      // Sunday

// Step 1: Get daily totals
$rawRevenue = DB::table('factures')
    ->selectRaw('DATE(created_at) as date, SUM(total_amount) as total')
    ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
    ->groupBy(DB::raw('DATE(created_at)'))
    ->orderBy('date')
    ->get()
    ->keyBy('date'); // so we can easily access by date

// Step 2: Build a full 7-day dataset
$weeklyData = [];
$labels = [];
$totals = [];

$current = $startOfWeek->copy();

while ($current->lte($endOfWeek)) {
    $date = $current->toDateString(); // 'YYYY-MM-DD'
    $labels[] = $current->format('D'); // 'Mon', 'Tue', etc.
    $totals[] = isset($rawRevenue[$date]) ? $rawRevenue[$date]->total : 0;
    $current->addDay();
}

// Now pass $labels and $totals to your chart
return view('Admin.dashboard', [
    'labels' => $labels,
    'totals' => $totals
]);

    }



















/* Stock-Management  part of the App    */ 
    public function Stock(){
        $category_count = Categories::count();
        $item_count = Stocks::count();
        $totalStockValue = Stocks::selectRaw('SUM(quantity * price) as total')->value('total');

        $stocks_alert = Categories::join('stocks as s', 'categories.id', '=', 's.category_id')
        ->where('s.quantity', '<', 10)
        ->select('categories.*', 's.*')
        ->get();


        $data = Categories::join('stocks as s', 'categories.id', '=', 's.category_id',)
                  ->select('categories.*', 's.*')
                  ->paginate(10);

                //   $data = Stocks::join('Categories as c', 'Stocks.category_id', '=', 'c.id',)
                //   ->select('Stocks.*', 'c.*')
                //   ->paginate(10);

        return view('Admin.stockManagement.Stock',compact('data','category_count','item_count','totalStockValue','stocks_alert'));
    }


    public function create_item(){
       $categories =  Categories::all();
        return view('Admin.stockManagement.add-item', compact('categories'));
    }


    public function store_item(request $request ){
        $data = $request->validate([
        'category_id' =>'required',
        'part_name'  =>'required',
        'quantity'  =>'required',
        'price'	 =>'required',
        'supplier'  =>'required',
        'description'  =>'required' 
        ]);

        Stocks::create($data);
        return to_route('admin.create_item')->with('success', 'Item created successfully.');
    }


    public function destroy_item( request $request) {
        $item = Stocks::find($request->id);
        // dd($item);
        $item->delete();
        return to_route('admin.stock')->with('success', 'Item deleted successfully.');
    }


    public function edit_item(request $request){
        $item = Stocks::find($request->id);
        $categories = Categories::all();
        return view('Admin.stockManagement.update-item',compact('item','categories'));
    }


    public function update_item( Stocks $Stocks ,request $request){
        $data  = $request->validate([
            'category_id' => 'required',
            'part_name' =>'required',
            'quantity' =>'required',
            'price' =>'required',
            'supplier' =>'required',
            'description' =>'required'

        ]);
        $Stocks->fill($data)->save();
        return to_route('admin.stock');
    }







    public function store_category(request $request){
        $data  = $request->validate([
            'name' => 'required',
            'description' =>'required'
        ]);
        Categories::create($data);
        return to_route('admin.create_item')->with('success', 'Category created successfully.');
    }


    public function alert_item(){
        $stocks_alert = Categories::join('stocks as s', 'categories.id', '=', 's.category_id')
        ->where('s.quantity', '<', 10)
        ->select('categories.*', 's.*')
        ->paginate(10);
        return view('Admin.stockManagement.alert-items',compact('stocks_alert'));
    }



    public function update_Stock_alert(Request $request){
    $stockItem = Stocks::findOrFail($request->id);
    $validated = $request->validate([
        'quantity' => 'required|integer|min:1',
    ]);
    
    $stockItem->update([
        'quantity' => $validated['quantity'], 
        
    ]);

    return to_route('admin.alert_item')->with('success', 'Stock updated successfully.');
}

























/* Employees-Management-ADMIN  part of the App    */ 
    public function employes(){
        $employes = autorepair_users::withCount('repairs')->paginate(6);
        $total = autorepair_users::count();
        return view('Admin.employesManagement.employes',compact('employes','total'));
    }


    public function create_emplye(){
        return view('Admin.employesManagement.add-employe');
    }


    public function store_emplye(Request $request){
        // $data = $request->post();
        $data = $request->validate([
            "name" =>"required",
            "email" =>"required|unique:autorepair_users|email",
            "password" =>"required|min:5|max:15",
            "role" =>"required",
            "phone" =>"required",
            "position" =>"required",
            "salary_amount" =>"required",
            "hire_date" =>"required",
            "status"=>"required",
            'image' => 'image|mimes:svg,pneg,jpg,png'
        ]);
        $data['password'] = Hash::make($request->password);
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('profile','public');
        }
        autorepair_users::create($data);
        return to_route('admin.employes')->with('success', "Employe   {$request->name} created successfully.");
    }



    public function edit_employe(request $request){
        $employe = autorepair_users::find($request->id);
        return view('Admin.employesManagement.update-employe',compact('employe'));
    }


    public function update_employe( autorepair_users  $autorepair_users  ,request $request){
       $data = $request->post();
        $data = $request->validate([
            "name" =>"required",
            "email" =>"required|email",
            
            "phone" =>"required",
            "position" =>"required",
            "salary_amount" =>"required",
            "hire_date" =>"required",
            "status" =>'required',
            "password"=>"required",
            'image' => 'image|mimes:svg,pneg,jpg,png'
        ]);
        if($request->hasFile('image')){
          $data['image'] = $request->file('image')->store('profile','public');
        }
        // dd($data);
        $data['password'] = Hash::make($request->password);
        $autorepair_users->fill($data)->save();
        return to_route('admin.employes')->with('success', "Employe {$request->name} updated successfully ");
    }


    public function destroy_employe(request $request){
        $employe = autorepair_users::find($request->id);
        $employe->delete();
        return to_route('admin.employes')->with('success', "Employe {$request->name} deleted successfully ");
    }

















/* Appointment-Management  part of the App    */ 
    public function appointment(){
        
       

        $repairs = Repairs::with(['user', 'facture'])
        ->orderByRaw("FIELD(status,'Completed' ,'In_Progress' , 'Not Started')")
        ->paginate(6);
        //  dd($repairs);

        
             

        return view('Admin.AppointmentManagement.Appointment',compact('repairs'));
    }

    public function create_appointment(){
        $mechanics = autorepair_users::where('role', 'employee')->get();
        return view('Admin.AppointmentManagement.add-appointment',compact('mechanics'));
    }
    public function store_appointment(Repairs  $Repairs,request $request){
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'client_phone' => 'required|string|', // Adjust this regex if needed for your phone number format
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'license_plate' => 'required|string|max:20',
            'description' => 'required',
            'assigned_to' => 'required', // Adjust based on your mechanics table and structure
            'started_at' => 'required',
        ]);

         $validated['status_code'] = strtoupper(Str::random(3)) . '-' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT); ;
        // dd($validated);
        Repairs::create($validated);
        return to_route('admin.appointment')->with('success', 'Appointment created successfully.');
    }





    public function generatePDF(request $request, $id){
        $facture = Factures::with(['details.piece', 'autorepair_users', 'repairs'])->findOrFail($id);

        $pdf = Pdf::loadView('factures.pdf', compact('facture'));
    
       return $pdf->download("facture_{$facture->id}.pdf");

    }



}
