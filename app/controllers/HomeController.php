<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class HomeController
{
    public function show(){

        $ultimos = App::get('database')->ultimosAdicionados('produto');
 
        return view('site/home',compact('ultimos'));
    }
}