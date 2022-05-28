<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CategoriasController
{
    /**
     * Listar todos os registros
     */
    public function index()
    {
       $categorias = App::get('database')->selectAll('categorias');
       $table = ["categorias" => $categorias];
       
       return view('admin/categorias', $table);
    }

    /**
     * Renderizar página para exibir um registro
     */
    public function show()
    {
        $pesquisa = $_GET["pesquisa"];
        $result = App::get('database')->selectPesquisa("categorias", $pesquisa);
        $tabela = ["categorias" => $result];

        return view("admin/categorias", $tabela);
    }

    /**
     * Renderizar página de criação de um registro
     */
    public function create()
    {
        $dados = ["nome" => $_POST['nome']];
        App::get('database')->insertCategoria('categorias',$dados);
        header('Location:/categorias');
    }

    /**
     * Armazenar um registro
     */
    /* public function store()
    {

    } */

    /**
     * Renderizar página de edição de um registro
     */
    /* public function edit()
    {

    } */

    /**
     * Atualizar um registro
     */
    public function update()
    {
        $dados = ["nome" => $_POST['nome']];
        $id = $_POST['id'];
        App::get('database')->updateCategoria('categorias', $id, $dados);
        header('Location:/categorias');
    }

    /**
     * Deletar um registro
     */
    public function delete()
    {
        $id = $_POST['id'];
        App::get('database')->delete('categorias', $id);
        header('Location:/categorias');
    }
}