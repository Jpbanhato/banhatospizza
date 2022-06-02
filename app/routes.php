<?php

/**
 * Categorias:
 */

/**
 * Produtos:
 */

$router->get('admin/produtos','ProdutosAdmController@index');
$router->post('admin/produtos/create','ProdutosAdmController@create');
$router->post('admin/produtos/delete','ProdutosAdmController@delete');
$router->post('admin/produtos/update','ProdutosAdmController@update');


/**
 * Usuários:
 */

/**
 * Outros:
 */
$router->get('','HomeController@show');
$router->get('quem-somos','QuemSomosController@show');
$router->get('produto','ProdutoController@show');
$router->get('contato','ContatoController@show');
$router->get('login','LoginController@show');
$router->get('produtos','ProdutosSiteController@index');


?>