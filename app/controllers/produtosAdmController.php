<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class produtosAdmController
{
    /**
     * Listar todos os registros
     */
    public function index()
    {
        $result = App::get('database')->selectAll('produto');
        return view('admin/produtos', compact('result'));
    }

    /**
     * Renderizar página para exibir um registro
     */
    public function show()
    {
       // $id = filter_input(INPUT_POST,'id')
    }

    /**
     * Renderizar página de criação de um registro
     */
    public function create()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'descricao' => $_POST['descricao'],

        ];
    
        var_dump($_POST['nome']);
        exit();
        App::get('database')->insertProdutos('produto', $parameters);
        header('Location: /adm/produtos-adm');

    }

    /**
     * Armazenar um registro
     */
    public function store()
    {

    }

    /**
     * Renderizar página de edição de um registro
     */
    public function edit()
    {

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
        $parameters = $_POST['id'];
        App::get('database')->deleteProdutos('produto', $parameters);
        header('Location: /adm/produtos-adm');
    }
}