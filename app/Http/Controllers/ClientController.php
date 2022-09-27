<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\Category;
use App\Models\User;
use App\Service\TransationMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function account()
    {
        $categories = Category::all();

        return view('account.account', compact('categories'));
    }

    public function register()
    {
        return view('account.login.register');
    }

    public function salvar(UserStoreRequest $request)
    {

      $data = $request->except('_token');
      $data['password'] = Hash::make($data['password']);
      $user = User::create($data);
      Auth::login($user);

      return redirect ()->route('home');

    }

    public function login()
    {
        $categories = Category::all();

        return view('account.login.login', compact('categories'));
    }

    public function entrar(Request $request)
    {

       if (!Auth::attempt($request->only(['email', 'password']))) {
        return redirect()
        ->back()
        ->withErrors('Usuário e/ou senha incorretos');
       }
       return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect ('/');
    }

    public function resetPassword(Request $request)
    {
        $message = $request->session()->get('message');
        return view('account.login.reset',compact('message'));
    }

    public function emailPassword(Request $request,TransationMessage $transationMessage)
    {
        $transationMessage->newEmail($request, $request->email);

        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT ? back()
            ->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function formNewPassword($token)
    {
        return view('account.login.newpassword', ['token' => $token]);
    }

    public function storeNewPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

}
