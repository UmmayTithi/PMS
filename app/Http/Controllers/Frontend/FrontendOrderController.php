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
   public function viewcart()
   {
       return view('Frontend.pages.cart');
   }
   public function addToCart($product_id)
   {
       
       $product=Product::find($product_id);
       
       $getCart=session()->get('cart');
          
           if($getCart==null)
           {
               $newCart=[
                   $product->id=>[
                           'name'=>$product->name,
                           'price'=>$product->price,
                           'quantity'=>1,
                           'image'=>$product->image,
                           'subtotal'=>$product->price,
                           'discount'=>5,
                       ]
               ];
               session()->put('cart',$newCart);
               return redirect()->back()->with('message','Product Added to Cart');
           }
     
            if(array_key_exists($product_id,$getCart))
                {
                    //increment quantity of existing product.
                    ++$getCart[$product_id]['quantity'];
                    session()->put('cart',$getCart);
                    return redirect()->back()->with('message','Product Quantity Updated');
                }else
                {
                    //if not empty but product is different step 3
                    $getCart[$product->id]=[
                            'name'=>$product->name,
                            'price'=>$product->price,
                            'quantity'=>1,
                            'image'=>$product->image,
                            'subtotal'=>$product->price,
                            'discount'=>5,
                    ];
                    session()->put('cart',$getCart);
                    return redirect()->back()->with('message','Product Added to Cart.');
                }


            }  
        

public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('message','Cart Clear');
    }


}

    


