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

$aluno = new AlunoController;
$atividade = new AtividadeExtensaoController;
$inscricao = new InscricaoController;

$aln = $aluno->recoverById(8);
$atv = $atividade->recoverById(3);

$inscricao->save($aln['aln_id'], $atv['ate_id'], '862.705.348-01');
//  $a = $inscricao->verificaCpf('862.7s05.348-01', 3);

// if ($a){
//     echo 'ok';
// }
// else
//     echo "false";