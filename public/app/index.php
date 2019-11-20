<?php

require_once('vendor/autoload.php');

use Controller\AlunoController;
use Dao\AtividadeExtensaoDao;
use Dao\AlunoDao;
use Model\AtividadeExtensaoModel;
use Controller\AtividadeExtensaoController;
use Dao\InscricaoDao;
use Model\AlunoModel;
use Model\InscricaoModel;

$teste = new InscricaoDao;
var_dump($teste->recoverAll());
