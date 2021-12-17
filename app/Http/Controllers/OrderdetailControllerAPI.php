<?php

namespace App\Http\Controllers;
use App\Models\Orderdetail;
use App\Models\Myorder;

use Illuminate\Http\Request;

class OrderdetailControllerAPI extends Controller
{



    public function orderdetailAPIList(){
        return Orderdetail::all();
    }
    public function orderdetailAPIPost(Request $request){
        $var = new Orderdetail();
        $var->order_id= $request->order_id;
        $var->P_name= $request->p_name;
        $var->P_price= $request->p_price;
        $var->P_categories= $request->p_categories;
        $var->P_quantity= $request->p_quantity;
        $var->P_tprice= $request->p_tprice;
        $var->P_size= $request->p_size;
        $var->U_username= $request->u_username;
        $var->save();

        return $request;
    }

    function edit($id)
    {
        return Orderdetail::find($id);
    }

    public function update(Request $request){

        $var = Orderdetail::where('id',$request->id)->first();
        $var->order_id= $request->order_id;
        $var->P_name= $request->p_name;
        $var->P_price= $request->p_price;
        $var->P_categories= $request->p_categories;
        $var->P_quantity= $request->p_quantity;
        $var->P_tprice= $request->p_tprice;
        $var->P_size= $request->p_size;
        $var->U_username= $request->u_username;
        $var->save();

        return $request;
    }
}
