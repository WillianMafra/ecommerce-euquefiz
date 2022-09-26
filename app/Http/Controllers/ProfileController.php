<?php

namespace App\Http\Controllers;

use app\Models\Profile;

class ProfileController extends Controller
{
    public function dices()
    {
        return view('profile.profile');
    }
}