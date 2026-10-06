<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\autorepair_users;
use App\Models\Categories;
use App\Models\Stocks;
use App\Models\Repairs;
use App\Models\Factures;
use App\Models\details_factures;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EmployesController extends Controller
{
    public function dashboard(){
        $user =  autorepair_users::find(Auth::user()->id);
        $user->update([
            'status' => 1,
        ]);
        $user->save();
        $repairs = $user->repairs()->where('status', '!=', 'completed')->get();
        
        return view('Employes.dashboard',compact('repairs'));
    }

    public function task(repairs $repairs){

        $rep = repairs::find($repairs->id);
        $rep->update([
            'status' => "in_progress",
        ]);
        $rep->save();
        
        return view('Employes.task',compact('repairs'));
    }
    public function facturation(request $request){
        $stocks =  stocks::all();
        $repairs = $request->id ;
        return view('Employes.facturation',compact('stocks','repairs'));
    }
    public function store_facture(Request $request){
         // 1. Create the main facture
    $facture = Factures::create([
        'repair_id' => $request->repair_id, // Pass this hidden input in form
        'date_issued' => Carbon::now(),
        'total_parts' => 0, // Will calculate below
        'service' => $request->service_price,
        'total_amount' => 0, // Will calculate below
        'paid' => false, // Default
    ]);

    $totalParts = 0;
    $details = [];

    // 2. Loop through dynamic part rows
    $i = 1;
    while ($request->has("part{$i}")) {
        $partId = $request->input("part{$i}");
        $quantity = $request->input("quantity{$i}");
        $unitPrice = $request->input("price{$i}");
        $totalPrice = $request->input("total{$i}");

        $details[] = [
            'facture_id' => $facture->id,
            'part_id' => $partId,
            'part_name' => \App\Models\Stocks::find($partId)?->part_name ?? 'Pièce inconnue',
            'quantity' => $quantity,
            'unit_price' => $unitPrice,
            'total_price' => $totalPrice,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $totalParts += $totalPrice;
        $i++;
    }
    
    // 3. Insert all details at once
    details_factures::insert($details);

    // 4. Update facture totals
    $facture->update([
        'total_parts' => $totalParts,
        'total_amount' => $totalParts + $request->service_price,
    ]);
    // 5. Update repair status
    $repair = Repairs::find($request->repair_id);
    $repair->update([
        'status' => "completed",
    ]);
    $repair->save();

    return to_route('employe.dashboard')->with('success', 'Repair Done successfully');

    }

}
