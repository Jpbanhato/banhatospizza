<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{
   
    /**
     * Renderizar página para exibir um registro
     */
    public function view()
    {

        return view('site/login');
    }


   
}
