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

$teste = new InscricaoController;
$teste->save(3, 3);

$aluno = new AlunoController;
// $aluno->save("Daniela", "Feminino", "1994-04-08", "153.458.478-22");