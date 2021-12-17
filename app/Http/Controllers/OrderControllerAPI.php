<?php

namespace App\Http\Controllers;
use App\Models\Myorder;
use App\Models\Systemuser;

use Illuminate\Http\Request;

class OrderControllerAPI extends Controller
{

    public function orderAPIList(){
        return Myorder::all();
    }
    public function orderAPIPost(Request $request){
        $var = new Myorder();
        $var->O_id= $request->O_id;
        $var->user_id = $request->user_id;
        $var->U_username = $request->U_username;
        $var->P_tprice=$request->P_tprice;
        $var->Paymanttype = $request->Paymanttype;
        $var->O_status=$request->O_status;
        $var->save();

        return $request;
    }

    function edit($id)
    {
        return Myorder::find($id);
    }

    public function update(Request $request){

        $var = Myorder::where('id',$request->id)->first();
        $var->O_id= $request->O_id;
        $var->user_id = $request->user_id;
        $var->U_username = $request->U_username;
        $var->P_tprice=$request->P_tprice;
        $var->Paymanttype = $request->Paymanttype;
        $var->O_status=$request->O_status;
        $var->save();

        return $request;
    }


    
}
