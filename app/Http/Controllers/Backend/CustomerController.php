<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    
    public function customer(){ 
        $customers=User::where("role","customer")->get();
        return view('backend.pages.Customer.Customer',compact('customers'));
    }

    public function delete($id){
        $customer=User::findOrFail($id);
        $customer->delete();
        return back();
    }
}
