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
$router->get('quem-somos','QuemSomosController@show');
$router->get('produto','ProdutoController@show');
$router->get('contato','ContatoController@show');
$router->get('login','LoginController@show');
$router->post('loginBack','LoginController@login');
$router->post('logout','LoginController@logout');
$router->get('admin/dashboard','DashboardController@show');


?>