<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerAPI extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function userdash(){
        return view('pages.users.userdash');

    }

    public function userprofile(){
        return view('pages.users.userprofile');

    }
}
