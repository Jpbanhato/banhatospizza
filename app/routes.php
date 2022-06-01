<?php

/**
 * Categorias:
 */
  $router->post("admin/categorias/create", "CategoriasController@create");

  $router->get("admin/categorias", "CategoriasController@index");
  $router->get("admin/categorias/result", "CategoriasController@show");

  $router->post("admin/categorias/update", "CategoriasController@update");
  
  $router->post("admin/categorias/delete", "CategoriasController@delete");
/**
 * Produtos:
 */

/**
 * Usuários:
 */

/**
 * Outros:
 */
$router->get('','HomeController@show');
$router->get('site/quem-somos','QuemSomosController@show');
$router->get('site/produto','ProdutoController@show');
$router->get('site/contato','ContatoController@show');
$router->get('site/login','LoginController@show');
$router->post('login','LoginController@login');
$router->post('logout','LoginController@logout');
$router->get('admin/dashboard','DashboardController@show');


?>