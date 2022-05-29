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

?>