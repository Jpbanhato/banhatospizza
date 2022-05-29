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
       $categorias = App::get('database')->selectAll('categoria');
       $table = ["categorias" => $categorias];
       
       return view('admin/categorias', $table);
    }

    /**
     * Renderizar página para exibir um registro
     */
    public function show()
    {
        $pesquisa = $_GET["pesquisa"];
        $result = App::get('database')->selectPesquisa("categoria", $pesquisa);
        $tabela = ["categorias" => $result];

        return view("admin/categorias", $tabela);
    }

    /**
     * Renderizar página de criação de um registro
     */
    public function create()
    {
        $dados = ["nome" => $_POST['nome']];
        App::get('database')->insertCategoria('categoria',$dados);
        header('Location:/admin/categorias');
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
        $dados = ["nome" => $_POST["nome"]];
        $id = $_POST["id"];
        App::get("database")->updateCategoria("categoria", $id, $dados);
        header('Location:/admin/categorias');
    }

    /**
     * Deletar um registro
     */
    public function delete()
    {
        $id = $_POST['id'];
        App::get('database')->delete('categoria', $id);
        header('Location:/admin/categorias');
    }
}