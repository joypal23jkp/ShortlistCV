<?php

namespace App\Http\Controllers\UserPanel\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use http\Env\Request;

class LoginController extends Controller{

    /**
     * @param UserRequest $userRequest
     */
    public function __invoke(Request $request){


        /** @var TYPE_NAME $validate */
        $validate = $userRequest->validated();
        dd($validate);
    }
}
