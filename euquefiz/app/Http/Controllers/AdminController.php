<?php

namespace App\Http\Controllers;

class AdminController extends Controller

{
    public function admin(){
        return view('admin.admin');
    }
    public function management(){
        return view('admin.management.dashboard');
    }
    public function createProduct()
    {
        return view('admin.products.createProduct');
    }
}
