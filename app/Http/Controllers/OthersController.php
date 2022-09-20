<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OthersController extends Controller
{
    public function aboutus()
    {
        return view('others.aboutus');
    }
    public function carShopping()
    {
        return view('products.carShopping.carShopping');
    }
    public function events()
    {
        return view('others.events');
    }
    public function gallery()
    {
        return view('others.gallery');
    }
}
