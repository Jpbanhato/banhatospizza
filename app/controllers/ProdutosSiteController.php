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
        $page = 1;

        if (isset($_GET['pagina']) && !empty($_GET['pagina']))
        {
            $page = intval($_GET['pagina']);

            if ($page <= 0)
            {
                return redirect('admin/produtos');
            }
        }

        $items_per_page = 6;
        $start_limit = $items_per_page * $page - $items_per_page;
        $rows_count = App::get('database')->countAll('produto');
        
        if ($start_limit > $rows_count) {
            return redirect('admin/produtos');
        }

        $total_pages = ceil($rows_count / $items_per_page);
        $produtos = App::get('database')->selectAllProdutosPagination('produto', $start_limit, $items_per_page); 

        return view('site/produtos', compact('produtos', 'page', 'total_pages'));
    

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