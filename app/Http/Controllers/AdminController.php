<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{




    public function list(){

        $admins = Admin::all();
        return view('pages.admins.list')->with('admins',$admins);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        $admin = Admin::where('id',$id)->first();
        return view('pages.admins.edit')->with('admin', $admin);

    }



    

    public function editSubmit(Request $request){
        $var = Admin::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->dob = $request->dob;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->save();
        return redirect()->route('admin.list');

    }
    public function delete(Request $request){
        $var = Admin::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('admin.list');

    }



}
