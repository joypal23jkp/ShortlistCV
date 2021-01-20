<?php

namespace App\Http\Controllers\UserPanel\Auth;

use App\Http\Controllers\Controller;
//use App\Http\Requests\UserRequest;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

    /**
     * @param LoginRequest $request
     */
    public function __invoke(LoginRequest $request){

        $validated = $request->validated();
        dd($validated);
       dd(Auth::attempt(('$valideted')));

    }
}
