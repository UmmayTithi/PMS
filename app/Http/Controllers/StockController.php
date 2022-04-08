<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stock(){ 
        $stocks =Stock::all();
        return view('backend.pages.Stock.Stock',compact('stocks'));
    }
    public function stockForm(){
        return view('backend.pages.Stock.createstock');
    }


    public function stockPost(Request $request){
        // dd($request->all());
        stock::create([
            // coloum name of DB || name of input field
            ' name'=>$request->product_name,
            
            'quantity'=>$request->product_quantity,
        ]);

        return redirect()->route('admin.stock.show');
}
}