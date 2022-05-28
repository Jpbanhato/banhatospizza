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

 $router->get('usuarios','UserController@view');

 $router->post('usuarios/create','UserController@create');

 $router->post('usuarios/update','UserController@update');

 $router->post('usuarios/delete','UserController@delete');

/**
 * Outros:
 */

?>