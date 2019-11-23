<?php

require_once('vendor/autoload.php');

use Controller\AlunoController;
use Dao\AtividadeExtensaoDao;
use Dao\AlunoDao;
use Model\AtividadeExtensaoModel;
use Controller\AtividadeExtensaoController;
use Controller\ContasReceberController;
use Controller\InscricaoController;
use Dao\ContasReceberDao;
use Dao\InscricaoDao;
use Model\AlunoModel;
use Model\ContasReceberModel;
use Model\InscricaoModel;

$aluno = new AlunoModel;
$atividade = new AtividadeExtensaoController;
$inscricao = new InscricaoController;

// $aln = $aluno->recoverById(3);
// $atv = $atividade->recoverById(5);
// $inscricao->save($aln['aln_id'], $atv['ate_id'], $aln['aln_cpf']);

//  $a = $inscricao->verificaCpf('862.7s05.348-01', 3);
// if ($a){
//     echo 'ok';
// }
// else
//     echo "false";

$data = array("cpf" => "123.456.789-00", "valor" => "12345", "vencimento" => "2020-01-01");
$data_string = json_encode($data);

$ch = curl_init('https://prova-dev-unifagoc.herokuapp.com/api/v1/boleto');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

echo $result;


// require_once('Views/AlunoView.php');