<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function usersList()
    {
        $users = User::all();
        return view('admin.management.users.usersList', compact('users'));
    }
}
