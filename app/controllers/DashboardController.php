<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
session_start();
class DashboardController 
{
    /**
     * Listar todos os registros
     */
    public function show()
    {
        if(!isset($_SESSION['email'])){
            header('Location: /login');
        }
        $email = $_SESSION['email'];
        $usuario = APP::get('database')->selectUsuario('usuario', $email);
        return view('admin/dashboard-adm', compact('usuario'));
    }

  
}