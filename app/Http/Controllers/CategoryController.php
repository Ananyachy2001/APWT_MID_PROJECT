<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function Create(){
        return view('pages.categories.create');
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'c_name'=>'required',
                'c_desc'=>'required',

            ],
            [
                'c_name.required'=>'Please insert category name',
                'c_desc.required'=>'Please insert category description',
            ]
        );

        $var = new Category();
        $var->C_name= $request->c_name;
        $var->C_desc = $request->c_desc;
        $var->save();


        return redirect()->route('category.list');      
    }
    public function list(){

        $categories = Category::all();
        return view('pages.categories.list')->with('categories',$categories);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $category= Category::where('id',$id)->first();
        return view('pages.categories.edit')->with('category', $category);

    }

    public function editSubmit(Request $request){
        $var = Category::where('id',$request->id)->first();
        $var->C_name= $request->c_name;
        $var->C_desc = $request->c_desc;
        $var->save();
        return redirect()->route('category.list');

    }
    public function delete(Request $request){
        $var = Category::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('category.list');

    }
}
