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
        $stmt = $this->con->prepare("SELECT * FROM TBL_INSCRICAO WHERE ate_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function recoverAll()
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_INSCRICAO");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function delete($id)
    {
        $stmt = $this->con->prepare("DELETE FROM TBL_INSCRICAO WHERE aln_id = :id");
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

    

}