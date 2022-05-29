<?php

/**
 * Categorias:
 */

/**
 * Produtos:
 */
$router->get('site/view-produtos','produtosSiteController@index');
//$router->get('site/insert-produtos','produtosAdmController@insert');
$router->get('adm/produtos-adm','produtosAdmController@index');
$router->post('produtos/create','produtosAdmController@create');
$router->post('produtos/delete','produtosAdmController@delete');
$router->post('produtos/update','produtosAdmController@update');


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