<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\\Http\\Controllers')
->group(function() {
    /**
     * Home logics
     */
    Route::middleware('auth')->group(function() {
        Route::get(
            '/', 
            'IndexController@index'
        )->name('home');
        
        Route::post(
            '/',
            'IndexController@store',
        );

        Route::get(
            '/delete/{delete}',
            'IndexController@delete',
        )->name('delete');
    });
    
    

    /**
     * Login logics
     */
    Route::get(
        '/login', 
        'login\LoginController@index'
    )->name('login');

    Route::get(
        '/logout', 
        'login\LoginController@logout'
    )->name('logout');

    Route::post(
        '/login', 
        'login\LoginController@store'
    );
    

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
    );
});


