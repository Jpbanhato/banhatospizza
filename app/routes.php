<?php

/**
 * Categorias:
 */

/**
 * Produtos:
 */
$router->get('site/produtos','ProdutosSiteController@index');
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
$router->get('','homeController@show');
$router->get('site/quem-somos','QuemSomosController@show');
$router->get('site/produto','ProdutoController@show');
$router->get('site/contato','ContatoController@show');
$router->get('site/login','LoginController@show');


?>