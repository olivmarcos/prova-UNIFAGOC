<?php
namespace Model;

use Model\AlunoModel;
use Model\AtividadeExtensaoModel;

class InscricaoModel {
    private $aluno;
    private $atividade;
    private $dataInscricao;

    public function __construct(AlunoModel $aluno, AtividadeExtensaoModel $atividade)
    {
        $this->aluno = $aluno;
        $this->atividade = $atividade; 
    }

    public function getAluno()
    {
        return $this->aluno;
    }

    public function getAtividadeExtensao()
    {
        return $this->atividade;
    }
}