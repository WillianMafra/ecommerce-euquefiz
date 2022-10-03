<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AdminOrdersController extends Controller
{
    public function ordersList()
    {   $users = User::all();
        $orders = Order::all();
        return view('admin.management.orders.ordersList', compact('orders','users'));
    }

    public function destroyOrder(Order $order)
    {
        $order->delete();

        return Redirect::route('ordersList');
    }
}
