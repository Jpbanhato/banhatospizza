<?php

/**
 * Categorias:
 */

/**
 * Produtos:
 */
$router->post('pesquisaProdutos', 'ProdutosAdmController@search');


/**
 * Contato:
 */
$router ->get('contato','ContatoController@view');

/**
 * Login:
*/
$router ->get('login','LoginController@view');

 

?>