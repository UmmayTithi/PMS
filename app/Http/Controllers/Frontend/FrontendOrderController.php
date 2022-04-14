<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendOrderController extends Controller
{
    public function showproduct($product_id){
        $product=Product::find($product_id);
        // dd($product->all());
        return view('Frontend.pages.singleproduct',compact('product'));
    }
   
}

