<?php

namespace App\Service;

use Illuminate\Support\Facades\Auth;

class NewUserBalance
{
    public function newBalance($total) : void
    {
        $newBalance = Auth::user()->getBalance() - $total;
        Auth::user()->setBalance($newBalance);
        Auth::user()->save();
    }
}
