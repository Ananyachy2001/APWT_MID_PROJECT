<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Systemuser;

class UserController extends Controller
{
   
    public function Create(){
        return view('pages.users.create');
    }
    public function createSubmit(Request $request){
       
        $this->validate(
            $request,
            [

                'name'=>'required|min:4|max:20',
                'phone'=>'required|min:11|max:11|unique:systemusers,U_phone',
                'address'=>'required',
                'username'=>'required|min:5|max:10',
                'email'=>'required|regex:/(.+)@(.+)\.(.+)/i|unique:systemusers,U_email',
                'password'=>'required|min:6',
           ],
           [
               'name.required'=>'Name required!',
               'name.min'=>'Name must be atleast 4 charcaters!',
               'name.max'=>'Name must be atmost 20 charcaters!',
               'phone.required'=>'Phone required!',
               'phone.min.max'=>'Phone must be exact 11 charcaters!',
               'phone.unique'=>'Phone Number already added!',
               
               'address.required'=>'Address required!',
               'username.required'=>'Username required!',
               'username.min'=>'Username must be atleast 5 charcaters!',
               'username.max'=>'Username must be atmost 10 charcaters!',
               'email.required'=>'Email required!',
               'email.regex'=>'Email is not valid!',
               'password.required'=>'Password required!',
               'password.min'=>'Password must be atleast 6 charcaters!!',
               
           ]
           
           );
        $var = new Systemuser();
       
        $var->U_Name= $request->name;
        $var->U_phone= $request->phone;
        $var->U_address= $request->address;
        $var->U_username= $request->username;
        $var->U_email= $request->email;
        $var->U_password= $request->password;
        $var->Usertype= $request->usertype;
        $var->U_profileimg= $request->profileimg;
        $var->save();


        return redirect()->route('login');
    }


    public function list(){

        $users = Systemuser::all();
        return view('pages.users.list')->with('users',$users);
    }
}