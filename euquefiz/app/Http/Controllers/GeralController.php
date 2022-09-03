<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeralController extends Controller
{
    public function home(){
        return view('home');
    }

    public function events(){
        return view('others.events');
    }

    public function login(){
        return view('account.login');
    }

    public function products(){
        return view('products.products');
    }

    public function aboutus(){
        return view('others.aboutus');
    }

    public function account(){
        return view('account.account');
    }
    public function register(){
        return view('account.register');
    }
}
