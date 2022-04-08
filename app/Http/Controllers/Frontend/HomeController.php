<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function home(){
        $items = Product::all();
        return view('Frontend.pages.home',compact('items'));
    }

  
        public function registrationForm(){
            
             return view('Frontend.pages.registration'); 

        }
        public function registrationFormpost(Request $request){
            // dd($request->all());
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]);
            // dd($request->all());

            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'role'=>'customer'
            ]);
            return redirect()->route('home');

        }
        

}
