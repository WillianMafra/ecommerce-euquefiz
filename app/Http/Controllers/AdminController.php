<?php

namespace App\Http\Controllers;


class AdminController extends Controller

{
    public function management()
    {
        return view('admin.management.dashboard');
    }
    public function teste()
    {
        return view('admin.management.teste');
    }
}
