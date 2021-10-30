<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
       //
       function category()
       {
           $Category=Category::all();
           return view('Staff.Category.Work')->with('Category',$Category);
       }
   
       function addcategory()
       {
           return view('Staff.Category.Add');
       }
   
       function insertcategory(Request $request)
       {
           $this->validate(
               $request,
               [
                   'name'=>'required|min:3|max:30',
                   'desc'=>'required|min:10'
                   
                   
   
   
               ],
               [
                  
                   'name.required'=>'Please Enter Your Name',
                   'name.min'=>'Name must be greater than 2 charcters',
                   'desc.required'=>'Description  Needed',
                   'desc.min'=>'Description must be greater than 10 characters'
                   
   
   
   
       
       
               ]
           );
           $var = new Category();
           $var->name= $request->name;
           $var->desc=$request->desc;
          
           $var->save();
       
   
           return redirect()->route('category');
       
         
       }
   
       function edit(Request $request)
       {
           $id = $request->id;
           $Category = Category::where('id',$id)->first();
           return view('Staff.Category.Edit')->with('cate', $Category);
       }
       function editSubmit(Request $request){
   
           $this->validate(
               $request,
               [
                   'name'=>'required|min:3|max:30',
                   'desc'=>'required|min:10'
                   
   
   
               ],
               [
                   
                   'name.required'=>'Please Enter Your Name',
                   'name.min'=>'Name must be greater than 2 charcters',
                   'desc.required'=>'Description  Needed',
                   'desc.min'=>'Description must be greater than 10 characters'
               ]
           );
           $var = Category::where('id',$request->id)->first();
           $var->name= $request->name;
           $var->desc = $request->desc;
           $var->save();
       
   
           return redirect()->route('category');
       
   
       }
       public function delete(Request $request){
           $var = Category::where('id',$request->id)->first();
           $var->delete();
           return redirect()->route('category');
   
       }
}
