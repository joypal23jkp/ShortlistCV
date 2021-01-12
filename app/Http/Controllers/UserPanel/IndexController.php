<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;

class IndexController extends Controller{

    public function index(){
        dd('');
        return view('Frontend.index');
    }

}
