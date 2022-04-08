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
        $request->validate([
            'name'=>'required',
            'details'=>'required',
            'category_id'=>'required',
            'quantity'=>'required | integer' ,
            'price'=>'required|numeric',
            'image'=>'image'
        ]);


    

        $filename = null;
        if ($request->hasfile('image')){
            $file=$request->file('image');


            $filename = date('ymdhis').'.'.$file->getClientOriginalExtension();
            $file ->storeAs('/uploads',$filename);
        }
        Product::create([
            // coloum name of db || name of input field
            'name'=> $request->name,
            'details'=> $request->details,
            'category_id'=> $request->category_id,
            'quantity'=> $request->quantity,
            'price'=>$request->price,
            'image'=>$filename,
        ]);
        return redirect()->route('admin.product.show');
    }
    public function productEdit($id){
        $categories = Category::all(); 
        $product = Product::find($id);
        if ($product) {
        return view('backend.pages.productedit',compact('categories','product'));
        } else {
            return redirect()->back();
        }
        
    }

    public function productUpdate(Request $request){
        // dd($request->all());
        $product = Product::find($request->product_id);
        $filename = $product->image;

        if ($product) {
            $product->update([
                'name'=>$request->name,
                'category_id'=>$request->category_id,
                'quantity'=>$request->quantity,
                'image'=>$filename,
            ]);
            return redirect()->route('admin.product.show');
        } else {
            return redirect()->back();
        }

    }

    public function productDelete($id){
        $product =Product::find($id);
        if ($product) {
            $product->delete();
            return redirect()->back();

        } else {
        return redirect()->back();
        }
        
    }
}

        



