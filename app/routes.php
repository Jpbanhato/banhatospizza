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
  $router->get('admin/produtos','ProdutosAdmController@index');
  $router->post('admin/produtos/create','ProdutosAdmController@create');
  $router->post('admin/produtos/delete','ProdutosAdmController@delete');
  $router->post('admin/produtos/update','ProdutosAdmController@update');
  $router->get('admin/produtos/search','ProdutosAdmController@search');

/**
 * Contato:
 */
$router ->get('contato','ContatoController@view');
$router ->post('contato/sendEmail', 'ContatoController@sendEmail');
 $router->get('admin/usuarios','UserController@view');
 $router->post('admin/usuarios/create','UserController@create');
 $router->post('admin/usuarios/update','UserController@update');
 $router->post('admin/usuarios/delete','UserController@delete');
 $router->post('admin/usuarios/select','UserController@select');
 $router->get('admin/usuarios/search','UserController@search');


/**
 * Login:
*/
$router ->get('login','LoginController@view');

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
$router->get('produtos','ProdutosSiteController@index');


?>