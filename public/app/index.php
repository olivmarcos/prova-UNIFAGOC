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