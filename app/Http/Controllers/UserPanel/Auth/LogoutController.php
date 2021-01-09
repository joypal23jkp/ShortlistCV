<?php

namespace App\Http\Controllers\UserPanel\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class LogoutController extends Controller{

    public function __invoke(): JsonResponse
    {
        // TODO: Implement __invoke() method.

        return response()->json([
            'msg' => 'Logout Controller'
        ]);
    }

}
