<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\\Http\\Controllers')
->group(function() {
    /**
     * Home logics
     */
    Route::get('/', 'IndexController@index')->name('home');
    

    /**
     * Login logics
     */
    Route::get(
        '/login', 
        'login\LoginController@index'
    )->name('login');

    Route::post(
        '/login', 
        'login\LoginController@store'
    )->name('login');
    

    /**
     * Regist logics
     */
    Route::get(
        '/regist', 
        'login\RegistController@index'
    )->name('regist');

    Route::post(
        '/regist', 
        'login\RegistController@store'
    )->name('regist');
});


