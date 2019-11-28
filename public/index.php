<?php

// require_once('app/index.php');

require 'vendor/autoload.php';
include 'config.php';

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

$router->namespace("Controller");

$router->group(null);
$router->get('/', 'Web:home');
$router->get('/cadastro', 'Web:cadastro');
$router->get('/extensao', 'Web:cadastroExtensao');
$router->post('/salvar', 'Web:salvarAluno');
$router->post('/salvarExtensao', 'Web:salvarExtensao');

$router->dispatch();

$router->group("error");
$router->get("/{errcode}", "Web:error");

if($router->error()){
    $router->redirect("/error/{$router->error()}");
}