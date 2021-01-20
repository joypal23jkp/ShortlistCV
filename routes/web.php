<?php

use App\Http\Controllers\UserPanel\Auth\LoginController;
use App\Http\Controllers\UserPanel\Auth\ShowLoginController;
use App\Http\Controllers\UserPanel\Auth\LogoutController;
use App\Http\Controllers\UserPanel\IndexController;
use Illuminate\Support\Facades\Route;

//Guest Routes
Route::middleware('guest')->group(function (){

    Route::prefix('auth')->group(function(){
        Route::get('/login', ShowLoginController::class)->name('login.show');
        Route::post('/login', LoginController::class)->name('login');
    });

});

//Auth Routes

Route::middleware('auth')->group(function (){
    Route::get('/', [ IndexController::class, 'index' ]);
    Route::post('/logout', LogoutController::class)->name('logout');
});
