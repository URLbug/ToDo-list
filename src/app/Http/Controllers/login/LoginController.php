<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(): View
    {
        return view('login.login');
    }

    function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'username' => 'string|required|max:255|min:2',
            'password' => 'string|required|max:255|min:6',
        ]);

        $isLogin = $this->login($data['username'], $data['password']);

        if(!$isLogin)
        {
            return back()->withErrors('Не верный логин или пароль!');
        }

        return redirect()->route('home');
    }

    /**
     * Method for authorization user
     * 
     * @param string $login
     * @param string $password
     */
    function login(string $login, string $password): bool
    {
        return Auth::attempt([
            'login' => $login,
            'password'=> $password,
        ],
        true);
    }

    function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
