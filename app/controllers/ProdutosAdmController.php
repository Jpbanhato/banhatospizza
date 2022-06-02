<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProdutosAdmController
{
    /**
     * Listar todos os registros 
     */
    public function index()
    {
        $resultProduto = App::get('database')->selectAllProdutos('produto');
        $resultCategoria = App::get('database')->selectAllCategorias('categoria');  
        $resultGeral = array();
        $resultGeral = [
            'produtos' => $resultProduto,
            'categorias' => $resultCategoria,
        ];
        return view('admin/produtos', compact('resultGeral'));

    }
   /* public function showCategorias()
    {
       
        return view('admin/produtos', compact('resultCategoria'));
    }*/
    /**
     * Renderizar página para exibir um registro
     */
    public function show()
    {
        $resultShow = App::get('database')->showProdutos('produto',  $_POST['id']);
        return view('admin/produtos', $resultShow);
        header('Location: /admin/produtos');
            
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
            'idCategoria' => $_POST['categoria'],
            'informacoesUteis' => $_POST['informacoesUteis'],

        ];
        App::get('database')->insertProdutos('produto', $parameters);
        header('Location: /admin/produtos');

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
        $parameters = [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'descricao' => $_POST['descricao'],
            'idCategoria' => $_POST['categoria'],

        ];
        App::get('database')->updateProdutos('produto', $parameters, $_POST['id']);
       
        header('Location: /admin/produtos');
    }

    /**
     * Deletar um registro
     */
    public function delete()
    {
        App::get('database')->deleteProdutos('produto',  $_POST['id']);
        header('Location: /admin/produtos');
    }
}