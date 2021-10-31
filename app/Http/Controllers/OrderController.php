<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myorder;
use App\Models\Systemuser;

class OrderController extends Controller
{
    public function Create(){
        $systemusers = Systemuser::all();

        return view('pages.orders.create')->with('systemusers',$systemusers);
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'O_id'=>'required',
                'user_id'=>'required',
                'U_username'=>'required',
                'P_tprice'=>'required',
                'Paymanttype'=>'required',
                'O_status'=>'required',
            ],
            [
                'O_id.required'=>'Please put Order ID!',
                'user_id.required'=>'Please put User ID!',
                'U_username.required'=>'Please put Username!',
                'P_tprice.required'=>'Please put Price!',
                'Paymanttype.required'=>'Please put Payment!',
                'O_status.required'=>'Please put Order!',
            ]
        );

        $var = new Myorder();
        $var->O_id= $request->O_id;
        $var->user_id = $request->user_id;
        $var->U_username = $request->U_username;
        $var->P_tprice=$request->P_tprice;
        $var->Paymanttype = $request->Paymanttype;
        $var->O_status=$request->O_status;
        $var->save();


        return redirect()->route('order.list');      
    }
    public function list(){

        $orders = Myorder::all();
        $systemusers = Systemuser::all();

        return view('pages.orders.list')->with('orders',$orders,'systemusers',$systemusers);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $orders = Myorder::where('id',$id)->first();
        $systemusers = Systemuser::all();
        return view('pages.orders.edit')->with('orders', $orders,'systemusers',$systemusers);

    }

    public function editSubmit(Request $request){
        $var = Myorder::where('id',$request->id)->first();
        $var->O_id= $request->O_id;
        $var->user_id = $request->user_id;
        $var->U_username = $request->U_username;
        $var->P_tprice=$request->P_tprice;
        $var->Paymanttype = $request->Paymanttype;
        $var->O_status=$request->O_status;
        $var->save();
        
        return redirect()->route('order.list');

    }
    public function delete(Request $request){
        $var = Myorder::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('order.list');

    }
}
