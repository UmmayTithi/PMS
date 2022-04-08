<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('backend.pages.login');
    }
    public function dologin(request $request){
        //  dd($request->all());
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        // dd($request->all());
        $credentials=$request->except('_token');

        if (auth()->attempt($credentials))
        {
            return redirect()->route('welcome');
        }
        return redirect()->back()->with('message','invalid credentials');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login')->with('message','Logout Successful');
    }
}

