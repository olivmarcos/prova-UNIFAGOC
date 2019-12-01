<?php
namespace Controller;

use Dao\ContasReceberDao;
use Model\ContasReceberModel;

class ContasReceberController {

    private $contasReceberDao;

    public function __construct()
    {
        $this->contasReceberDao = new ContasReceberDao();
    }

    public function save($boleto, $valor, $dataVencimento, $descricao, $inscricaoId)
    {
        $contas = new ContasReceberModel;
        $contas->setBoleto($boleto);
        $contas->setValor($valor);
        $contas->setDataVencimento($dataVencimento);
        $contas->setDescricao($descricao);
        $contas->getInscricaoId($inscricaoId);
        
        return $this->contasReceberDao->save($contas);

    }

    public function recoverById($id)
    {
        return $this->contasReceberDao->recoverById($id);
    }

    public function recoverAll()
    {
        var_dump($this->contasReceberDao->recoverAll());
    }

    public function delete($id)
    {
        return $this->contasReceberDao->delete($id);
    }
}