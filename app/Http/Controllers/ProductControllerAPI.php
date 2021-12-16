<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductControllerAPI extends Controller
{
    public function Create(){
        $products = Product::all();
        return view('pages.products.create')->with('products',$products);  
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'p_id'=>'required',
                'p_name'=>'required',
                'p_price'=>'required',
                'p_categories'=>'required',
                'p_quantity'=>'required',
                'p_details'=>'required',

            ],
            [
                'p_id.required'=>'Please put Product ID!',
                'p_name.required'=>'Please put Product Name!',
                'p_price.required'=>'Please put Product Price!',
                'p_categories.required'=>'Please put categories!',
                'p_quantity.required'=>'Please put Product Quantity',
                'p_details.required'=>'Please put Product Details!',
            ]
        );


        $var = new Product();
        $var->P_id= $request->p_id;
        $var->P_name = $request->p_name;
        $var->P_price = $request->p_price;
        $var->P_categories=$request->p_categories;
        $var->P_quantity = $request->p_quantity;
        $var->P_details = $request->p_details;
        $var->P_img1=$request->p_img1;
        $var->P_img2=$request->p_img2;
        $var->P_img3=$request->p_img3;
        $var->save();

        
        return redirect()->route('product.list');    
    }
    public function list(){

        $products = Product::all();
        return view('pages.products.list')->with('products',$products);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $product= Product::where('id',$id)->first();
        return view('pages.products.edit')->with('product', $product);

    }

    public function editSubmit(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->P_id= $request->p_id;
        $var->P_name = $request->p_name;
        $var->P_price = $request->p_price;
        $var->P_categories=$request->p_categories;
        $var->P_quantity = $request->p_quantity;
        $var->P_details = $request->p_details;
        $var->P_img1=$request->p_img1;
        $var->P_img2=$request->p_img2;
        $var->P_img3=$request->p_img3;
        $var->save();
        return redirect()->route('product.list');

    }
    public function delete(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('product.list');

    }

    public function productAPIList(){
        return Product::all();
    }
    public function productAPIPost(Request $request){
        $var = new Product();
        $var->P_id= $request->p_id;
        $var->P_name = $request->p_name;
        $var->P_price = $request->p_price;
        $var->P_categories=$request->p_categories;
        $var->P_quantity = $request->p_quantity;
        $var->P_details = $request->p_details;
        $var->P_img1=$request->p_img1;
        $var->P_img2=$request->p_img2;
        $var->P_img3=$request->p_img3;
        $var->save();

        return $request;
    }
}
