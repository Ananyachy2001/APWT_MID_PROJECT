<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Systemuser;
class LoginController extends Controller
{
    public function Login(){

        return view('pages.login');
    }
    public function loginSubmit(Request $request){
        $validate=$request->validate([


            'u_username'=>'required|min:5',
            'u_password'=>'required|min:6',
       ],
       [
           'u_username.required'=>'Username required!',
           'u_username.min'=>'Name must be atleast 5 charcaters!',
           'u_password.required'=>'Password required!',
           'u_password.min'=>'Password must be atleast 6 charcaters!!',
           
       ]
       
       );

       $Systemuser = Systemuser::where('U_username',$request->u_username)
       ->where('U_password',$request->u_password)
       ->first();

        if($Systemuser){
        $request->session()->put('user_id',$Systemuser->id);
        $request->session()->put('user_name',$Systemuser->U_username);
        return redirect()->route('userdash');
       

    }
    return back();


}

        public function logout(){   
                session()->forget('user_id');
                return redirect()->route('login');
            }



            public function userdash(){

                $Systemuser=Systemuser::where('id',Session()->get('user_id'))->first();
       
                return view('pages.users.userdash')->with('Systemuser',$Systemuser);
           }
       
           public function userprofile(){
       
               $Systemuser=Systemuser::where('id',Session()->get('user_id'))->first();
       
               return view('pages.users.userprofile')->with('Systemuser',$Systemuser);
          }


}