<?php

require_once('vendor/autoload.php');

use Controller\AlunoController;
use Dao\AtividadeExtensaoDao;
use Dao\AlunoDao;
use Model\AtividadeExtensaoModel;
use Controller\AtividadeExtensaoController;
use Controller\InscricaoController;
use Dao\InscricaoDao;
use Model\AlunoModel;
use Model\InscricaoModel;
use Exception;

$aluno = new AlunoController;
$atividade = new AtividadeExtensaoController;
$inscricao = new InscricaoController;

$aln = $aluno->recoverById(6);
$atv = $atividade->recoverById(5);

// $inscricao->save($aln['aln_id'], $atv['ate_id'], $aln['aln_cpf']);

// $atiEx = new AtividadeExtensaoModel;

// $atiEx->setTitulo("que");
// $atiEx->setTipo("Projeto");

// var_dump($atiEx);

use CoffeeCode\Router\Router;

$router = new Router("http://localhost:8080");


// $router->get('/', function($data){
//     echo "Hello World";
//     var_dump($data);
// });

$router->namespace("Controller");
// $router->group(null);

$router->get('/', 'AlunoController:recoverAll');

$router->dispatch();