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
$router->get('','homeController@show');
$router->get('site/quem-somos','quemSomosController@show');
$router->get('site/produto','produtoController@show');
$router->get('site/contato','contatoController@show');
$router->get('site/login','loginController@show');
$router->post('login','loginController@login');
$router->get('admin/dashboard','DashboardController@show');


?>