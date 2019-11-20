<?php
namespace Model;

use Model\AlunoModel;
use Model\AtividadeExtensaoModel;

class InscricaoModel {
    private $alunoId;
    private $atividadeId;
    private $dataInscricao;

    public function getAluno()
    {
        return $this->alunoId;
    }

    public function setAluno($alunoId)
    {
        $this->alunoId = $alunoId;
    }

    public function getAtividadeExtensao()
    {
        return $this->atividade;
    }

    public function setAtividadeExtensao($atividadeId)
    {
        $this->atividadeId = $atividadeId;
    }
}