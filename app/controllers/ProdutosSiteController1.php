<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProdutosSiteController
{
    /**
     * Listar todos os registros
     */
    public function index()
    {
        $result = App::get('database')->selectAllProdutos('produto');
        return view('site/produtos', compact('result'));
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
 
    }
}