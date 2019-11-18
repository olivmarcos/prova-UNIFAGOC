<?php

// require_once('Models/Conexao.php');

// Conexao::getInstance();

require_once('vendor/autoload.php');

use Dao\AlunoDao;
use Model\AlunoModel;

$aln = new AlunoModel;
$teste = new AlunoDao;

$aln->setNome("teste");
$aln->setSexo("masculino");
$aln->setDataNascimento('1994-04-08');
$aln->setCpf('123.456.789-96');

$teste->recoverById(6);

// print_r($teste);