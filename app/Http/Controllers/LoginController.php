<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    public function Login(){

        return view('pages.login');
    }
    public function loginSubmit(Request $request){
        $validate=$request->validate([


            'username'=>'required|min:5',
            'password'=>'required|min:6',
       ],
       [
           'username.required'=>'Username required!',
           'username.min'=>'Name must be atleast 5 charcaters!',
           'password.required'=>'Password required!',
           'password.min'=>'Password must be atleast 6 charcaters!!',
           
       ]
       
       );
       return redirect()->route('home');

    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
