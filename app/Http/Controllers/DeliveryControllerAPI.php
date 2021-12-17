<?php

namespace App\Http\Controllers;
use App\Models\Deliverinfo;

use Illuminate\Http\Request;

class DeliveryControllerAPI extends Controller
{

    
    public function deliveryAPIList(){
        return Deliverinfo::all();
    }
    public function deliveryAPIPost(Request $request){
        $var = new Deliverinfo();
        $var->Ord_id= $request->Ord_id;
        $var->Pay_price = $request->Pay_price;
        $var->D_username = $request->D_username;
        $var->D_Status = $request->D_Status;
        $var->D_time=$request->D_time;
        $var->save();

        return $request;
    }


    function edit($id)
    {
        return Deliverinfo::find($id);
    }

    public function update(Request $request){

        $var = Deliverinfo::where('id',$request->id)->first();
        $var->Ord_id= $request->Ord_id;
        $var->Pay_price = $request->Pay_price;
        $var->D_username = $request->D_username;
        $var->D_Status = $request->D_Status;
        $var->D_time=$request->D_time;
        $var->save();

        return $request;
    }
    

    
}
