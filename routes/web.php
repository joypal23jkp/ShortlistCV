<?php

use App\Http\Controllers\UserPanel\Auth\LoginController;
use App\Http\Controllers\UserPanel\Auth\LogoutController;
use App\Http\Controllers\UserPanel\IndexController;
use Illuminate\Support\Facades\Route;



//Guest Routes
Route::prefix('CV')->middleware('guest')->group(function (){

    Route::prefix('auth')->group(function(){
        Route::get('/login', [ LoginController::class, 'showLoginView' ])->name('login.show');
        Route::post('/login', [ LoginController::class, 'login' ])->name('login');
    });

    Route::get('/', [ IndexController::class, 'index' ]);

});

//Auth Routes

Route::prefix('CV')->middleware('auth')->group(function (){
    Route::get('/logout', LogoutController::class)->name('logout');
});
