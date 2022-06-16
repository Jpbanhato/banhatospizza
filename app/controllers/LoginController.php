<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
session_start();

class LoginController
{
    public function show(){

        return view('site/login');
    }

    public function login(){
        if (empty($_POST['email']) || empty($_POST['senha'])) {
            header('Location: /login');
            exit();
        }
        $parameters = [
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ];
        $resultLogin = App::get('database')->selectLogin('usuario', $parameters);
        if($resultLogin > 0){          
            $_SESSION['email'] = $_POST['email'];
            header('Location: /admin/dashboard');
        }else{
            $_SESSION['nao_autenticado'] = true;
            header('Location: /login');
        }

    }
    public function logout(){
        session_start();
        session_destroy();
        header('Location: /');


    }
}