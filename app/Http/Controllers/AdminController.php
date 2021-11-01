<?php

namespace App\Http\Controllers;
use App\Models\Systemuser;

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

                'u_name'=>'required|min:4|max:20',
                'u_phone'=>'required|min:11|max:11|unique:systemusers,U_phone',
                'u_address'=>'required',
                'u_username'=>'required|min:5|max:10',
                'u_email'=>'required|regex:/(.+)@(.+)\.(.+)/i|unique:systemusers,U_email',
                'u_password'=>'required|min:6',
           ],
           [
               'u_name.required'=>'Name required!',
               'u_name.min'=>'Name must be atleast 4 charcaters!',
               'u_name.max'=>'Name must be atmost 20 charcaters!',
               'u_phone.required'=>'Phone required!',
               'u_phone.min.max'=>'Phone must be exact 11 charcaters!',
               'u_phone.unique'=>'Phone Number already added!',
               
               'u_address.required'=>'Address required!',
               'u_username.required'=>'Username required!',
               'u_username.min'=>'Username must be atleast 5 charcaters!',
               'u_username.max'=>'Username must be atmost 10 charcaters!',
               'u_email.required'=>'Email required!',
               'u_email.regex'=>'Email is not valid!',
               'u_password.required'=>'Password required!',
               'u_password.min'=>'Password must be atleast 6 charcaters!!',
               
           ]
           
           );
        $var = new Systemuser();
       
        $var->U_Name= $request->u_name;
        $var->U_phone= $request->u_phone;
        $var->U_address= $request->u_address;
        $var->U_username= $request->u_username;
        $var->U_email= $request->u_email;
        $var->U_password= $request->u_password;
        $var->Usertype= $request->usertype;
        $var->U_profileimg= $request->u_profileimg;
        $var->save();


        return redirect()->route('admin.list');
    }


    public function list(){

        $users = Systemuser::all();
        return view('pages.admins.list')->with('users',$users);
    }


    public function edit(Request $request){
        //
        $id = $request->id;
        $user = Systemuser::where('id',$id)->first();
        return view('pages.admins.edit')->with('user', $user);

    }



    

    public function editSubmit(Request $request){
        $var = Systemuser::where('id',$request->id)->first();
        $var->U_Name= $request->u_name;
        $var->U_phone= $request->u_phone;
        $var->U_address= $request->u_address;
        $var->U_username= $request->u_username;
        $var->U_email= $request->u_email;
        $var->U_password= $request->u_password;
        $var->Usertype= $request->usertype;
        $var->U_profileimg= $request->u_profileimg;
        $var->save();
        return redirect()->route('admin.list');

    }
    public function delete(Request $request){
        $var = Systemuser::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('admin.list');

    }



}
