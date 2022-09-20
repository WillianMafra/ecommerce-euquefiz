<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\TransationMessage;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function usersList(Request $request)
    {
        $message = $request->session()->get('message');
        $users = User::all();
        return view('admin.management.users.usersList', compact('users', 'message'));
    }

    public function userPromotion(Request $request, $id, TransationMessage $transationMessage)
    {
        $userData = User::find($id);
        $userData['user_type'] = "admin";
        $userData->save();

        $transationMessage->userPromotionMessage($request, $userData['name']);

        return redirect()->back();
    }

    public function userDemoted(Request $request, int $id, TransationMessage $transationMessage)
    {
        $userData = User::find($id);
        $userData['user_type'] = "user";
        $userData->save();

        $transationMessage->userDemotedMessage($request, $userData['name']);

        return redirect()->back();
    }
}
