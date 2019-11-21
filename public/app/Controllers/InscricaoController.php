<?php
namespace Controller;

use Dao\InscricaoDao;
use Model\InscricaoModel;

class InscricaoController {

    private $inscricaoDao;

    public function __construct()
    {
        $this->inscricaoDao = new InscricaoDao;
    }

    public function save($alunoId, $atividadeId)
    {
        $inscricao = new InscricaoModel();
        $inscricao->setAlunoId($alunoId);
        $inscricao->setAtividadeExtensaoId($atividadeId);

        if($this->verificaLimite($atividadeId))
        {
            $this->inscricaoDao->save($inscricao);
        }
        else 
        {
            echo "O limite de inscrição foi atigindo!";
        }
    }

    public function verificaLimite($atividadeId)
    {
        $atividade = new AtividadeExtensaoController;
        $rows = $this->inscricaoDao->verificarLimite($atividadeId);
        $atv = $atividade->recoverById($atividadeId);

        return ($rows < $atv['ate_limite_inscricao']);/*Verifica se o limite de inscritos na atividade de extensão não foi ultrapassado */
    }
}