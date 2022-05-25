<?php

/**
 * Categorias:
 */
  $router->post("categorias/create", "CategoriasController@create");

  $router->get("categorias", "CategoriasController@index");
  $router->get("categorias/result", "CategoriasController@show");

  $router->post("categorias/update", "CategoriasController@update");
  
  $router->post("categorias/delete", "CategoriasController@delete");
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