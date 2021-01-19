<?php

namespace App\Http\Controllers\UserPanel\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

class RegistrationController extends Controller
{
    /**
     * @param UserRequest $userRequest
     */
    public function __invoke(UserRequest $userRequest){

        /** @var TYPE_NAME $validate */
        $validate = $userRequest->validated();
        dd($validate);
    }
}
