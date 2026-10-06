<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\autorepair_users;
use Illuminate\Support\Facades\Session;

class StatiqueController extends Controller
{
     public function Homepage(){
        return view('Statique.homepage');
     }

     public function Contact(){
        return view('Statique.contact');
     }
     public function About(){
        return view('Statique.about');
     }
     public function Tracking(){
        return view('Statique.tracking');
     }

     


    


 
   public function ajouter(){
       return view('ajouter');
   }
   public function create(Request $request){
      $data = $request->post();
      $data['password'] = hash::make($request->password);

    
      autorepair_users::create($data);

      return view('login.show');
  }


}
