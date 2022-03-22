<?php

namespace App\Http\Controllers\Backend;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function product(){
        $items = Product::with('category')->get();

        return view('backend.pages.product',compact('items'));
    }

    public function productCreate(){
        $categories=Category::all();

        return view('backend.pages.createproduct',compact('categories'));
    }

    public function productStore(Request $request){
        Product::create([
            // coloum name of db || name of input field
            'name'=> $request->name,
            'category_id'=> $request->category_id,

            'quantity'=> $request->quantity,
            'price'=>$request->price,
            'details'=>$request->details
        ]);
        return redirect()->route('admin.product.show');
    }
}