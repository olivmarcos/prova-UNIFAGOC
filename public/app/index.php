<?php

require_once('vendor/autoload.php');

use Controller\AlunoController;
use Dao\AtividadeExtensaoDao;
use Dao\AlunoDao;
use Model\AtividadeExtensaoModel;
use Controller\AtividadeExtensaoController;
use Model\AlunoModel;
use Model\InscricaoModel;

$aluno = new AlunoModel;
$aluno->setNome("Teste");
$aluno->setSexo("Masculino");
$aluno->setDataNascimento("1994-01-01");
$aluno->setCpf("123.456.789-25");

$atividade = new AtividadeExtensaoModel;
$atividade->setTitulo("Teste evento");
$atividade->setTipo("Curso");
$atividade->setResponsavel("Aquele lá");
$atividade->setLimiteInscricao(100);
$atividade->setLocal("Casa");
$atividade->setData("2019-12-12");
$atividade->setHora("20:00");
$atividade->setGratuito(0);
$atividade->setValor(20.00);

$teste = new InscricaoModel($aluno, $atividade);

$reultado = $teste->getAluno();

var_dump($reultado);