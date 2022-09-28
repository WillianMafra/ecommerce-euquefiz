<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function dices()
    {   
        $users = User::get();
      
        return view('profile.profile', compact('users'));
    }
}
