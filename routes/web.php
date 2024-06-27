<?php

use App\Services\Router;

$router = Router::getInstance();
$router->get('/', 'App\Controllers\HomeController', 'index');
$router->get('/contacts', 'App\Controllers\ContactController', 'index');
$router->post('/contacts/create', 'App\Controllers\ContactController', 'create');

echo '<pre>';
var_dump($router);