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

$aln = $aluno->recoverById(3);
$atv = $atividade->recoverById(5);

// $inscricao->save($aln['aln_id'], $atv['ate_id'], $aln['aln_cpf']);

$content = http_build_query(array(
    'cpf' => '123.456.789-00',
    'valor' => '12345',
    'vencimento' => '2019-01-01',
    ));
    
$context = stream_context_create(array(
    'http' => array(
    'method' => 'POST',
    'content' => $content,
    )));
    
$result = file_get_contents('http://prova-dev-unifagoc.herokuapp.com/api/v1', null, $context);

var_dump($result);