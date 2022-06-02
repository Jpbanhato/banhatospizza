<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{
    public function show(){

        return view('site/login');
    }
}