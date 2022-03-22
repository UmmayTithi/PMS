<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category(){ 
        $categories =Category::all();
        return view('backend.pages.Category.Category',compact('categories'));
    }
    public function categoryForm(){
        return view('backend.pages.Category.createCategory');
    }


    public function categoryPost(Request $request){
        // dd($request->all());
        Category::create([
            // coloum name of DB || name of input field
            'name'=>$request->category_name,
            'details'=>$request->category_details,
        ]);

        return redirect()->route('admin.category.show');
    }
}
