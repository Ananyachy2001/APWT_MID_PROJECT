<?php

namespace App\Http\Controllers;
use App\Models\Orderdetail;
use App\Models\Myorder;

use Illuminate\Http\Request;

class OrderdetailControllerAPI extends Controller
{
    public function Create(){

        $myorders = Myorder::all();
        return view('pages.orderdetails.create')->with('myorders',$myorders);  
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'order_id'=>'required',
                'p_name'=>'required',
                'p_price'=>'required',
                'p_categories'=>'required',
                'p_quantity'=>'required',
                'p_tprice'=>'required',
                'p_size'=>'required',
                'u_username'=>'required',
            ],
            [
                'order_id.required'=>'Please put Order ID!',
                'p_name.required'=>'Please put P_name!',
                'p_price.required'=>'Please put P_price!',
                'p_categories.required'=>'Please put P_categories!',
                'p_quantity.required'=>'Please put P_quantity!',
                'p_tprice.required'=>'Please put P_tprice!',
                'p_size.required'=>'Please put P_size!',
                'u_username.required'=>'Please put U_username!',
            ]
        );

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


        return redirect()->route('orderdetail.list');      


    }
    public function list(){

        $orderdetails = Orderdetail::all();
        return view('pages.orderdetails.list')->with('orderdetails',$orderdetails);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $orderdetail = Orderdetail::where('id',$id)->first();
        return view('pages.orderdetails.edit')->with('orderdetail', $orderdetail);

    }

    public function editSubmit(Request $request){
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
        return redirect()->route('orderdetail.list');

    }
    public function delete(Request $request){
        $var = Orderdetail::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('orderdetail.list');

    }


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
}
