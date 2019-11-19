<?php

require_once('vendor/autoload.php');

use Controller\AlunoController;
use Dao\AtividadeExtensaoDao;
use Dao\AlunoDao;
use Model\AtividadeExtensaoModel;

$controll = new AlunoController;

// $controll->update(5);

$atividade = new AtividadeExtensaoDao;
// $atividade->delete(4);
$at = new AtividadeExtensaoModel;
$at->setTitulo("Teste");;
$at->setTipo("Curso");
$at->setResponsavel("Testenildo");
$at->setLimiteInscricao(50);
$at->setLocal("Teste");
$at->setData('2019-11-18');
$at->setHora('15:00');
$at->setGratuito(1);
$at->setValor(50.00);
$atividade->update($at, 1);
$teste = new AlunoDao;
// $teste->recoverAll();