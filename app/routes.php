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

 $router->get('admin/usuarios','UserController@view');

 $router->post('admin/usuarios/create','UserController@create');

 $router->post('admin/usuarios/update','UserController@update');

 $router->post('admin/usuarios/delete','UserController@delete');

 $router->post('admin/usuarios/select','UserController@select');

 $router->post('admin/usuarios/search','UserController@search');

/**
 * Outros:
 */

?>