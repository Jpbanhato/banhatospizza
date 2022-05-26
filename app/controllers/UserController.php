<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ExampleController
{
    /**
     * Renderizar página para exibir um registro
     */
    public function view()
    {
        $usuarios -> App::get('database') -> selectAll('usuarios');
        $tables = [
            'usuarios' => $usuarios
        ];

        return view('adm/usuarios',$tables);
    }

    /**
     * Renderizar página de criação de um registro
     */
    public function create()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ];

        app::get['database'] ->insert('usuarios',$parameters);

        header('Location: /admin');

    }

    /**
     * Atualizar um registro
     */
    public function update()
    {
        
    }

    /**
     * Deletar um registro
     */
    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')-> delete('usuarios',$id);

        header['Location: /admin'];
 
    }
}