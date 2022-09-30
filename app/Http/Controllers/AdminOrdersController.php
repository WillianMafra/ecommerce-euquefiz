<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminOrdersController extends Controller
{
    public function ordersList()
    {
        return view('admin.management.orders.ordersList');
    }
}
