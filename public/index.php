<?php

// require_once('app/index.php');

require 'vendor/autoload.php';
include 'config.php';

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

$router->namespace("Controller");

$router->group(null);
$router->get('/', 'Web:home');
$router->get('/select', 'Web:select2');

$router->group('cadastro');
$router->get('/aluno', 'Web:cadastro');
$router->get('/extensao', 'Web:cadastroExtensao');
$router->get('/inscricao', 'Web:inscricao');

$router->group('salvar');
$router->post('/aluno', 'Web:salvarAluno');
$router->post('/extensao', 'Web:salvarExtensao');
$router->post('/inscricao', 'Web:realizarInscricao');

$router->dispatch();

$router->group("error");
$router->get("/{errcode}", "Web:error");

if($router->error()){
    $router->redirect("/error/{$router->error()}");
}