<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function Create(){
        return view('pages.admins.create');
    }
    public function createSubmit(Request $request){

        $this->validate(
            $request,
            [
                'name'=>'required|min:4|max:15',
                'phone'=>'required',
                'address'=>'required',
                'username'=>'required|min:5',
                'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'password'=>'required|min:6',
                'usertype'=>'required',
            ],
            [
                'Name.required'=>'Name required!',
                'Name.min'=>'Name must be atleast 4 charcaters!',
                'Name.max'=>'Name must be atmost 15 charcaters!',
                'phone.required'=>'Phone required!',
                'phone.required'=>'Phone required!',
                'address.required'=>'Address required!',
                'username.required'=>'Username required!',
                'username.min'=>'Name must be atleast 5 charcaters!',
                'email.required'=>'Email required!',
                'email.regex'=>'Email is not valid!',
                'password.required'=>'Password required!',
                'password.min'=>'Password must be atleast 6 charcaters!!',
            ]
        );

        $var = new Admin();
        $var->name= $request->name;
        $var->dob = $request->dob;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->save();


        return "OK";      
    }





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



    public function registrationPage(){
        return view('pages.users.registration');
    }
    public function registrationSubmit(Request $request){
        
        $validate = $request->validate([
            'name'=>'required|min:4|max:15',
            'phone'=>'required|min:11',
            'address'=>'required',
            'username'=>'required|min:5',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'password'=>'required|min:6',
            'usertype'=>'required',
                              
            ],
            [
                'Name.required'=>'Name required!',
                'Name.min'=>'Name must be atleast 4 charcaters!',
                'Name.max'=>'Name must be atmost 15 charcaters!',
                'phone.required'=>'Phone required!',
                'phone.min'=>'Phone Number must be 11 digits!',
                'address.required'=>'Address required!',
                'username.required'=>'Username required!',
                'username.min'=>'Name must be atleast 5 charcaters!',
                'email.required'=>'Email required!',
                'email.regex'=>'Email is not valid!',
                'password.required'=>'Password required!',
                'password.min'=>'Password must be atleast 6 charcaters!!',
            
               


            ]
        );
}

}
