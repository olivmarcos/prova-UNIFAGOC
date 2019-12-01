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

    public function save($boleto, $valor, $vencimento, $descricao, $inscricao)
    {
        $conta = new ContasReceberModel;
        $conta->setBoleto($boleto);
        $conta->setValor($valor);
        $conta->setDataVencimento($vencimento);
        $conta->setDescricao($descricao);
        $conta->setInscricaoId($inscricao);

        return $this->contasReceberDao->save($conta);
    }

    public function recoverById($id)
    {
        return $this->contasReceberDao->recoverById($id);
    }

    public function recoverAll()
    {
        return $this->contasReceberDao->recoverAll();
    }

    public function delete($id)
    {
        return $this->contasReceberDao->delete($id);
    }
}