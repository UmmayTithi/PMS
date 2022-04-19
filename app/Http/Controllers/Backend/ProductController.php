<?php

namespace App\Http\Controllers\Backend;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Generic;

class ProductController extends Controller
{
    public function product(){
        $items = Product::latest()->get();
        
        return view('backend.pages.product',compact('items'));
    }

    public function productCreate(){
        $categories=Category::all();
        $generics=Generic::all();
        return view('backend.pages.createproduct',compact('categories','generics'));
    }

    public function productStore(Request $request){
        $request->validate([
            'name'=>'required',
            'details'=>'required',
            'category_id'=>'required',
            'generic_id'=>'required',
            'quantity'=>'required | integer' ,
            'price'=>'required|numeric',
            "weight"=>"required",
            'image'=>'image|required'
        ]);


    

        $filename = null;
        if ($request->image){
             $file=$request->file('image');
             $filename = date('ymdhis').'.'.$file->getClientOriginalExtension();
             $file ->move(public_path('/uploads'),$filename);
                Product::create([
                // coloum name of db || name of input field
                'name'=> $request->name,
                'details'=> $request->details,
                'category_id'=> $request->category_id,
                'generic_id'=> $request->generic_id,
                'quantity'=> $request->quantity,
                'price'=>$request->price,
                "weight"=>$request->weight,
                'image'=>"uploads/".$filename,
            ]);
        }
        
        return redirect()->route('admin.product.show');
    }
    public function productEdit($id){
        $categories = Category::all(); 
        $generics=Generic::all();
        $product = Product::find($id);
        if ($product) {
        return view('backend.pages.productedit',compact('categories','product','generics'));
        } else {
            return redirect()->back();
        }
        
    }

    public function productUpdate(Request $request){
        // return $request->all();
        $request->validate([
            'name'=>'required',
            'details'=>'required',
            'category_id'=>'required',
            'generic_id'=>'required',
            'quantity'=>'required | integer' ,
            'price'=>'required|numeric',
            "weight"=>"required",
            'image'=>'nullable|image'
        ]);

        $product = Product::find($request->product_id);

        if($request->image){
            $file=$request->file('image');
            $filename = date('ymdhis').'.'.$file->getClientOriginalExtension();
             $file ->move(public_path('/uploads'),$filename);
            if(file_exists($product->image)){
                unlink($product->image);
            }
            $product->image="uploads/".$filename;
        }

        $product->name=$request->name;
        $product->details=$request->details;
        $product->category_id=$request->category_id;
        $product->generic_id=$request->generic_id;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->weight=$request->weight;
        $product->save();

        return redirect(route('admin.product.show'));


            

    }

    public function productDelete($id){
        $product =Product::findOrFail($id);
        if (file_exists($product->image)) {
           unlink($product->image);

        } 
        return redirect()->back();
        
    }


    public function show($id){
        $product=Product::findOrFail($id);
        return view("backend.pages.singleProduct",compact('product'));
    }
    public function search(Request $req){
        $this->validate($req,[
            "search"=>"required",
            "category_id"=>"required"
        ]);
        $items=Product::where("category_id",$req->category_id)
                        ->orWhere("name","like","%".$req->search."%")
                        ->orWhere("details","like","%".$req->search."%")
                        ->get();
      return view('Frontend.pages.home',compact('items'));
                         
    }
}

        
