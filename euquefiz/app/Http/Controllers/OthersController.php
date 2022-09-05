<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OthersController extends Controller
{
    public function aboutus()
    {
        return view('others.aboutus');
    }
    public function events()
    {
        return view('others.events');
    }
}
