<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class DashboardController 
{
    /**
     * Listar todos os registros
     */
    public function show()
    {
        return view('admin/dashboard-adm');
    }

  
}