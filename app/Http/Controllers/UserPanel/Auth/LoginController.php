<?php

namespace App\Http\Controllers\UserPanel\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

    /**
     * @param LoginRequest $request
     */
    public function __invoke(LoginRequest $request){

        $validated = $request->validated();

        if (Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->intended();
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
