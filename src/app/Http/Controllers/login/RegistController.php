<?php

namespace App\Http\Controllers\login;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistController extends LoginController
{
    function index(): View
    {
        return view('login.regist');
    }

    function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'username' => 'string|required|max:255|min:2',
            'password' => 'string|required|max:255|min:6',
            'conf_password' => 'string|required|max:255|min:6',
        ]);

        if($data['password'] !== $data['conf_password'])
        {
            return back()->withErrors('Пароли не совподают!');
        }

        $data['password'] = Hash::make($data['password']);

        User::query()
        ->where('login', '!=', $data['username'])
        ->create([
            'login' => $data['username'],
            'password' => $data['password'],
        ]);

        $isLogin = $this->login($data['username'], $data['password']);

        if(!$isLogin)
        {
            return back()->withErrors('Не удалось авторизироваться');
        }

        return redirect()->route('home');
    }
}
