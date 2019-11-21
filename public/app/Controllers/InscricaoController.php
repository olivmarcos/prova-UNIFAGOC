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

    public function save($alunoId, $atividadeId, $cpf)
    {
        $inscricao = new InscricaoModel();
        $inscricao->setAlunoId($alunoId);
        $inscricao->setAtividadeExtensaoId($atividadeId);

        if($this->verificaLimite($atividadeId))
        {
            if (!$this->verificaCpf($cpf, $atividadeId))
            {
                $this->inscricaoDao->save($inscricao);
                return;
            }
            echo "CPF já inscrito!";
            return;
            
        } 
        echo "O limite de inscrição foi atigindo!";
        return;
    }

    public function verificaLimite($atividadeId)
    {
        $atividade = new AtividadeExtensaoController;
        $rows = $this->inscricaoDao->verificarLimite($atividadeId);
        $atv = $atividade->recoverById($atividadeId);
        return ($rows < $atv['ate_limite_inscricao']);/*Verifica se o limite de inscritos na atividade de extensão não foi ultrapassado */
    }

    public function verificaCpf($cpf, $id)
    {
        $cpfs = $this->inscricaoDao->verificarCpf($id);
        foreach ($cpfs as $value) {
            if(strcmp($value['aln_cpf'], $cpf) == 0){
                return true;
            }
        }
        return false;
    }
}