<?php

use Dao\AtividadeExtensaoDao;
use Model\AtividadeExtensaoModel;

require_once('vendor/autoload.php');

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

// echo $result;

// require_once('Views/AlunoView.php');

$atividade = new AtividadeExtensaoModel;
$atividadeDao = new AtividadeExtensaoDao;

$atividade->setTitulo('abcs');
$atividade->setTipo('Curso');
$atividade->setResponsavel('eu mesmo');
$atividade->setLimiteInscricao('222');
$atividade->setLocal('sala');
$atividade->setData('2019-12-25');
$atividade->setHora('20:00');
$atividade->setGratuito('1');
$atividade->setValor('15.00');


if ($atividadeDao->save($atividade)) {
    echo 'ok';
}
else{
    echo 'not ok';
}