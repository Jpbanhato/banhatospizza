<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{
    /**
     * Renderizar página para exibir um registro
     */
    public function view()
    {
        $usuarios = App::get('database') -> selectAll('usuario');
        /**$tables = [
            'usuarios' => $usuarios
        ];
        */
        $tables = compact('usuarios');
        
        return view('admin/usuarios',$tables);
    }

    /**
     * Renderizar página de criação de um registro
     */
    public function create()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ];

        App::get('database') ->insertUsuario('usuario',$parameters);

        header('Location: /admin/usuarios');

    }

    /**
     * Atualizar um registro
     */
    public function update()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ];

        App::get('database') ->updateUsuario('usuario',$_POST['id'],$parameters);

        header('Location: /admin/usuarios');   
    }

    /**
     * Deletar um registro
     */
    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')-> delete('usuario',$id);

        header('Location: /admin/usuarios');
 
    }
}