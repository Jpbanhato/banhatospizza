<?php

/**
 * Categorias:
 */

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