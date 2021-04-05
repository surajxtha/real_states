<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function register()
    {
        return view('lander.properties.register');
    }

    public function login()
    {
        return view('lander.properties.login');
    }

    public function forget()
    {
        return view('lander.properties.forget');
    }
}

