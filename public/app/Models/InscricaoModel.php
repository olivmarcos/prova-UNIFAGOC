<?php
namespace Model;

use Model\AlunoModel;
use Model\AtividadeExtensaoModel;

class InscricaoModel {
    private $alunoId;
    private $atividadeId;
    private $dataInscricao;

    public function getAlunoId()
    {
        return $this->alunoId;
    }

    public function setAlunoId($alunoId)
    {
        $this->alunoId = $alunoId;
    }

    public function getAtividadeExtensaoId()
    {
        return $this->atividadeId;
    }

    public function setAtividadeExtensaoId($atividadeId)
    {
        $this->atividadeId = $atividadeId;
    }
}