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
        $produtos = App::get('database')->selectAllProdutosSite('produto');

        return view('site/produtos', compact('produtos'));
    }

    /**
     * Renderizar página para exibir um registro
     */
    public function show()
    {
       // $id = filter_input(INPUT_POST,'id')
     
    }

    public function search()
    {
        $pesquisa = $_GET["search"];
        $result = App::get('database')->selectPesquisaProdutosSite("produto", $pesquisa);
        $tabela = ["produtos" => $result];

        return view("site/produtos", $tabela);
    }
}