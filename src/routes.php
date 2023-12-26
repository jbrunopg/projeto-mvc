<?php
use core\Router;

$router = new Router();

$router->get('/novo', 'HomeController@index');

$router->get('/novo', 'UsuarioController@add');
$router->post('/novo', 'UsuariosController@addAction')