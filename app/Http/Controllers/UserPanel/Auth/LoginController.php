<?php

namespace App\Http\Controllers\UserPanel\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller{

    /* SHOW LOGIN FROM */
    public function showLoginView()
    {
        return view('Frontend.Auth.login');
    }

    public function login(Request $request)
    {

    }

}
