<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\TransationMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class AdminUserController extends Controller
{

    public function getAdminData()
    {
        $actualUser = Auth::user();
        $userData = [
            'name' => $actualUser->getAttribute('name'),
            'image' => $actualUser->getAttribute('image')];

        return view('admin.management.subview.navbar',compact('userData'));
    }

    public function usersList(Request $request)
    {

        $message = $request->session()->get('message');

        $users = User::all()->except(['id' => '1']);

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

    public function destroyUser(User $user)
    {
        $user->delete();

        return Redirect::route('usersList');
    }
}
