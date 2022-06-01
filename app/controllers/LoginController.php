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
        $parameters = [
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ];
        $errorMessage = "<div class='alert alert-danger' role='alert'>
        Email ou senha Incorretos
      </div>";
        $resultLogin = App::get('database')->selectLogin('usuario', $parameters);
        if($resultLogin > 0){          
            $_SESSION['email'] = $_POST['email'];
            header('Location: /admin/dashboard');
        }else{
            return view('site/login', compact('errorMessage'));
        }

    }
    public function logout(){
        session_start();
        session_destroy();
        header('Location: /site/login');


    }
}

