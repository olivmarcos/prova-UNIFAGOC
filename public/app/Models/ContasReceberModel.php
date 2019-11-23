<?php
namespace Model;

class ContasReceberModel {

    private $boleto;
    private $valor;
    private $dataVencimento;
    private $descricao;
    private $inscricaoId;

    public function getBoleto()
    {
        return $this->boleto;
    }

    public function setBoleto($boleto)
    {
        $this->boleto = $boleto;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }

    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getInscricaoId()
    {
        return $this->inscricaoId;
    }

    public function setInscricaoId($inscricaoId)
    {
        $this->inscricaoId = $inscricaoId;
    }
}