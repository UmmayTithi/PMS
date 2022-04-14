<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    
    public function customer(){ 
        $customers =User::all();
        return view('backend.pages.Customer.Customer',compact('customers'));
    }
    public function customerForm(){
        return view('backend.pages.Customer.customercreate');
    }


    public function customerPost(Request $request){
        // dd($request->all());
        customer::create([
            // coloum name of DB || name of input field
            // 'id'=>$request->customer_id,
            'name'=>$request->customer_name,
            'contact'=>$request->customer_contact,
            'email'=>$request->customer_email,
            
            'address'=>$request->customer_address,
        ]);

        return redirect()->route('admin.customer.show');
}
}

