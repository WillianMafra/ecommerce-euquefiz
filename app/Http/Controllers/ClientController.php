<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function account()
    {
        $categories = Category::all();

        return view('account.account', compact('categories'));
    }

    public function register()
    {
        $categories = Category::all();

        return view('account.register', compact('categories'));
    }

    public function login()
    {
        $categories = Category::all();

        return view('account.login', compact('categories'));
    }
}
