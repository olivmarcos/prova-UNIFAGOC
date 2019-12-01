<?php
namespace Dao;

use PDO;
use Model\Conexao;
use Model\InscricaoModel;

class InscricaoDao {

    private $con;

    public function __construct()
    {
        $this->con = Conexao::getInstance();
    }

    public function save(InscricaoModel $inscricao)
    {
        $stmt = $this->con->prepare("INSERT INTO TBL_INSCRICAO(ins_ALN_ID, ins_ATE_ID)" .
        "VALUES (:inscricaoId, :atividadeId)");
        $stmt->bindParam(':inscricaoId', $inscricao->getAlunoId());
        $stmt->bindParam(':atividadeId',  $inscricao->getAtividadeExtensaoId());
        return $stmt->execute();
    }

    public function recoverById($id)
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_INSCRICAO WHERE ins_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function recoverAll()
    {
        $stmt = $this->con->prepare("SELECT aln_id, aln_nome, aln_cpf, ate_titulo, ate_tipo, ate_valor FROM TBL_INSCRICAO
        JOIN TBL_ALUNO on ins_ALN_ID = aln_id
        JOIN TBL_ATIVIDADE_EXTENSAO on ins_ATE_ID = ate_id");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function delete($id)
    {
        $stmt = $this->con->prepare("DELETE FROM TBL_INSCRICAO WHERE ins_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function verificarLimite($id)
    {
        $stmt = $this->con->prepare("SELECT count(ins_id) FROM TBL_INSCRICAO WHERE ins_ATE_ID = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        return $result;
    }

    public function verificarCpf($id)
    {
        $stmt = $this->con->prepare("SELECT aln_cpf FROM TBL_INSCRICAO JOIN TBL_ALUNO TA ON TBL_INSCRICAO.ins_ALN_ID = TA.aln_id WHERE ins_ATE_ID = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // public function verificaGratuidade($id)
    // {
    //     $stmt = $this->con->prepare("SELECT ate_gratuito FROM TBL_ATIVIDADE_EXTENSAO WHERE ate_id = :id");
    //     $stmt->bindParam(':id', $id);
    //     $stmt->execute();
    //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return $result;
    // }   
    
}