<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Generic;

class GenericController extends Controller
{
    public function generic(){ 
        $generics =Generic::all();
        return view('backend.pages.Generic.Generic',compact('generics'));
    }
    public function genericForm(){
        return view('backend.pages.Generic.createGeneric');
    }


    public function genericPost(Request $request){
        // dd($request->all());
        Generic::create([
            // coloum name of DB || name of input field
            'name'=>$request->generic_name,
            'details'=>$request->generic_details,
        ]);

        return redirect()->route('admin.generic.show');
    }

    public function edit($id){
        $generic=Generic::findOrFail($id);
        return view("backend.pages.Generic.edit",compact('generic'));
    }

    public function update(Request $req){
        $this->validate($req,[
            "id"=>"required",
            "name"=>"required",
            "details"=>"required"
        ]);

        $generic=Generic::findOrFail($req->id);
        $generic->name=$req->name;
        $generic->details=$req->details;
        $generic->save();
        return redirect(route("admin.generic.show"));
    }

    public function delete($id){
        $generic=Generic::findOrFail($id);
        $generic->delete();
        return back();
    }
}
