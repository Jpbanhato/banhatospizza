<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class HomeController
{
    public function show(){

        return view('site/home');
    }
}