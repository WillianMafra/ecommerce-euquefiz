<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function account()
    {
        $categories = Category::all();

        return view('account.account', compact('categories'));
    }

    public function register()
    {
        $categories = Category::all();

        return view('account.register', compact('categories'));
    }

    public function salvar(Request $request)
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

        return view('account.login', compact('categories'));
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

}
