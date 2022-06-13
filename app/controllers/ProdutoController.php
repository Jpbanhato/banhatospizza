<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProdutoController
{
    public function show(){

        $id = $_GET["id"];

        $produto =  App::get('database')->selectProduto("produto", $id);

        return view('site/produto',compact('produto'));
    }
}