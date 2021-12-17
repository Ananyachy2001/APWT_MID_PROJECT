<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductControllerAPI extends Controller
{

    public function productAPIList(){
        return Product::all();
    }
    public function productAPIPost(Request $request){
        $var = new Product();
        $var->P_id= $request->P_id;
        $var->P_name = $request->P_name;
        $var->P_price = $request->P_price;
        $var->P_categories=$request->P_categories;
        $var->P_quantity = $request->P_quantity;
        $var->P_details = $request->P_details;
        $var->P_img1=$request->P_img1;
        $var->P_img2=$request->P_img2;
        $var->P_img3=$request->P_img3;
        $var->save();

        return $request;
    }

    function editproduct($id)
    {
        return Product::find($id);
    }

    public function updateproduct(Request $request){

        $var = Product::where('id',$request->id)->first();
        $var->P_id= $request->P_id;
        $var->P_name = $request->P_name;
        $var->P_price = $request->P_price;
        $var->P_categories=$request->P_categories;
        $var->P_quantity = $request->P_quantity;
        $var->P_details = $request->P_details;
        $var->P_img1=$request->P_img1;
        $var->P_img2=$request->P_img2;
        $var->P_img3=$request->P_img3;
        $var->save();

        return $request;
    }
}
