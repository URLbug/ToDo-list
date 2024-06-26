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
}
