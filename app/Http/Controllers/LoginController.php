<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\autorepair_users;


class LoginController extends Controller
{
    public function Login(){
        return view('login');
     }

     public function LoginStore(request $request){
        // dd($request);
        $fromdata = ['email' =>$request->email , 'password' => $request->password];
  
        if(auth::attempt($fromdata)){
           $request->session()->regenerate();
           $user = Auth::user();
  
  
           if ($user->role === 'admin') {
              return redirect()->route('admin.dashboard');
          } 
          elseif ($user->role === 'employee') {
              return redirect()->route('employe.dashboard');
          }
           
       }
          else{
           return to_route('login.show');
          }
     }
  
     public function logout(){
        $user =  autorepair_users::find(Auth::user()->id);
        $user->update([
            'status' => 0,
        ]);
        $user->save();

        Session::flush();
        Auth::logout();
        return to_route('login.show');
  
    }


}
