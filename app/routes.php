<?php

/**
 * Categorias:
 */

/**
 * Produtos:
 */
$router->get('site/produtos','produtosSiteController@index');
$router->get('admin/produtos','produtosAdmController@index');
$router->post('admin/produtos/create','produtosAdmController@create');
$router->post('admin/produtos/delete','produtosAdmController@delete');
$router->post('admin/produtos/update','produtosAdmController@update');


/**
 * Usuários:
 */

/**
 * Outros:
 */
$router->get('','homeController@show');
$router->get('site/quem-somos','quemSomosController@show');
$router->get('site/produto','produtoController@show');
$router->get('site/contato','contatoController@show');
$router->get('site/login','loginController@show');


?>