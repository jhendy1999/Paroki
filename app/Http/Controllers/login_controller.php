<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function viewlogin(){
        return view('Login.login');
    }

    public function viewadmin(){
        return view('Login.admin');
    }
}
