<?php

/**
 * Categorias:
 */
 $router->get('admin','CategoryController@view');

 $router->post('admin/create','CategoryController@create');

 $router->post('admin/update','CategoryController@update');

 $router->post('admin/delete','CategoryController@delete');


/**
 * Produtos:
 */
 $router->get('admin','ProductController@view');

 $router->post('admin/create','ProductController@create');

 $router->post('admin/update','ProductController@update');

 $router->post('admin/delete','ProductController@delete');

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