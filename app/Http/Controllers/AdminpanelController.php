<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminpanelController extends Controller
{
    //Register Page Show

    public function register()
    {
        return view('admin.register');
    }
    //Login Page Show

    public function login()
    {
        return view('admin.login');
    }

    //panel Page Show

    public function panel()
    {
        return view('admin.dashboard');
    }



}
