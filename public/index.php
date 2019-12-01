<?php

require 'vendor/autoload.php';
include 'config.php';

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

$router->namespace("Controller");

$router->group(null);
$router->get('/', 'Web:home');
$router->post('/login', 'Web:login');
$router->get('/painel', 'Web:painel');

$router->group('select');
$router->get('/aluno', 'Web:autocompleteAluno');
$router->get('/atividade', 'Web:autocompleteAtividade');

$router->group('cadastro');
$router->get('/aluno', 'Web:cadastro');
$router->get('/extensao', 'Web:cadastroExtensao');
$router->get('/inscricao', 'Web:inscricao');

$router->group('salvar');
$router->post('/aluno', 'Web:salvarAluno');
$router->post('/extensao', 'Web:salvarExtensao');
$router->post('/inscricao', 'Web:realizarInscricao');

$router->group('listar');
$router->get('/aluno', 'Web:listarAlunos');
$router->get('/atividade', 'Web:listarAtividades');
$router->get('/inscricao', 'Web:listarInscricoes');

$router->dispatch();

$router->group("error");
$router->get("/{errcode}", "Web:error");

if($router->error()){
    $router->redirect("/error/{$router->error()}");
}