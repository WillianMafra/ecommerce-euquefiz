<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeralController extends Controller
{
    public function home(){
        return view('home');
    }

    public function events(){
        return view('events');
    }

    public function login(){
        return view('login');
    }

    public function products(){
        return view('products');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function account(){
        return view('account');
    }
}
