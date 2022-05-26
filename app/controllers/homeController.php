<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class homeController
{
    public function show(){

        return view('site/home');
    }
}