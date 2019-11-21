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
$teste->save(2, 2);

$aluno = new AlunoController;
// $aluno->save("Marly", "Feminino", "1994-04-08", "133.455.478-22");