<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Requests\SaveProfile;
use App\Models\User;
use App\Service\TransationMessage;
use App\Service\UserProfileUpdate;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
<<<<<<< HEAD
    public function dices(Request $request)
    {
        $user =  Auth::user();
        $message = $request->session()->get('message');

        return view('profile.profile',compact('message','user'));
    }

    public function saveProfile(SaveProfile $request, UserProfileUpdate $profileUpdate, TransationMessage $transationMessage)
    {
        $user =  Auth::user();

        $data = $request->except('_token','_method');

        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);


        if ($profileUpdate->updateData($data, $user)) {
                $transationMessage->profileUpdatedSuccessfully($request);
        }
            return redirect()->back();
=======
    public function dices()
    {   
        $users = User::get();
      
        return view('profile.profile', compact('users'));
>>>>>>> 8991ba2f3af8a92b45e0d577f4459da7d8514e4e
    }
}
