<?php

namespace App\Http\Controllers\UserPanel\Auth;

use App\Http\Controllers\Controller;
use http\Client\Request;

class ShowLoginController extends Controller{

    /* SHOW LOGIN FROM */
    public function __invoke(){
        return view('Frontend.Auth.login');
    }
}
