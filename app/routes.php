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

 $router->post('user/create','UserController@create');

 $router->post('user/update','UserController@update');

 $router->post('user/delete','UserController@delete');

 $router->post('user/select','UserController@select');

 $router->post('user/search','UserController@search');

/**
 * Outros:
 */

?>