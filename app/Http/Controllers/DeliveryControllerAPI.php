<?php

namespace App\Http\Controllers;
use App\Models\Deliverinfo;

use Illuminate\Http\Request;

class DeliveryControllerAPI extends Controller
{
    public function Create(){
        return view('pages.deliveryconfirmations.create');
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'Ord_id'=>'required',
                'Pay_price'=>'required',
                'D_username'=>'required',
                'D_Status'=>'required',
                'D_time'=>'required',
            ],
            [
                'Ord_id.required'=>'Please put Order ID!',
                'Pay_price.required'=>'Pay_price put Order ID!',
                'D_Status.required'=>'Please put Delivery Status!',
                'D_time.required'=>'Please put Delivery Time!',
            ]
        );

        $var = new Deliverinfo();
        $var->Dman_id= $request->Dman_id;
        $var->Order_id = $request->Order_id;
        $var->D_Status = $request->D_Status;
        $var->D_time=$request->D_time;
        $var->save();


        return "Delivery Added";      
    }
    public function list(){

        $deliverys = Deliverinfo::all();
        return view('pages.deliveryconfirmations.list')->with('deliverys',$deliverys);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $delivery = Deliverinfo::where('id',$id)->first();
        return view('pages.deliveryconfirmations.edit')->with('delivery', $delivery);

    }

    public function editSubmit(Request $request){
        $var = Deliverinfo::where('id',$request->id)->first();
        $var->Dman_id= $request->Dman_id;
        $var->Order_id = $request->Order_id;
        $var->D_Status = $request->D_Status;
        $var->D_time=$request->D_time;
        $var->save();
        return redirect()->route('delivery.list');

    }
    public function delete(Request $request){
        $var = Deliverinfo::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('delivery.list');

    }

    
    public function deliveryAPIList(){
        return Deliverinfo::all();
    }
    public function deliveryAPIPost(Request $request){
        $var = new Deliverinfo();
        $var->Dman_id= $request->Dman_id;
        $var->Order_id = $request->Order_id;
        $var->D_Status = $request->D_Status;
        $var->D_time=$request->D_time;
        $var->save();

        return $request;
    }

    
}
