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

 $router->get('admin','UserController@view');

 $router->post('admin/create','UserController@create');

 $router->post('admin/update','UserController@update');

 $router->post('admin/delete','UserController@delete');

/**
 * Outros:
 */

?>