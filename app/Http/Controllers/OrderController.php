<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     
    public function order(){ 
        $orders =Order::all();
        return view('backend.pages.Order.Order',compact('orders'));
    }
    public function orderForm(){
        return view('backend.pages.Order.createorder');
    }


    public function orderPost(Request $request){
        // dd($request->all());
        order::create([
            // coloum name of DB || name of input field
            'id'=>$request->order_id,
            
            'details'=>$request->order_details,
        ]);

        return redirect()->route('admin.order.show');
}
}
