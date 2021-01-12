<?php

namespace App\Http\Controllers\UserPanel\Auth;

use App\Http\Controllers\Controller;

class ShowRegistrationController extends Controller
{
    public function __invoke(){
        return view('Frontend.Auth.login');
    }
}
