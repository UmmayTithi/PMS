<?php

namespace App\Http\Controllers\Backend;


use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function customer(){ 
        $customers =Customer::all();
        return view('backend.pages.Customer.Customer',compact('customers'));
    }
    public function customerForm(){
        return view('backend.pages.Customer.createCustomer');
    }


    public function customerPost(Request $request){
        // dd($request->all());
        customer::create([
            // coloum name of DB || name of input field
            'id'=>$request->customer_id,
            'name'=>$request->customer_name,
            'details'=>$request->category_details,
        ]);

        return redirect()->route('admin.category.show');
    }
}
