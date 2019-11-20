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

    public function save($inscricaoId, $atividadeId)
    {
        $stmt = $this->con->prepare("INSERT INTO TBL_INSCRICAO(ins_ALN_ID, ins_ATE_ID)" .
        "VALUES (:inscricaoId, :atividadeId)");        

        $stmt->bindParam(':inscricaoId', $inscricaoId);
        $stmt->bindParam(':atividadeId', $atividadeId);

        if ($stmt->execute())
        {
            echo 'ok';
        }
        else
            echo 'not ok';
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

    public function update(InscricaoModel $inscricao, $id)
    {
        $stmt = $this->con->prepare("UPDATE TBL_INSCRICAO SET aln_nome = :name, aln_sexo = :sexo, aln_dataNascimento = :dataNascimento, aln_cpf = :cpf WHERE aln_id = :id");
        $stmt->bindParam(':name', $inscricao->getNome());
        $stmt->bindParam(':sexo', $inscricao->getSexo());
        $stmt->bindParam(':dataNascimento', $inscricao->getDataNascimento());
        $stmt->bindParam(':cpf', $inscricao->getCpf());
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    public function delete($id)
    {
        $stmt = $this->con->prepare("DELETE FROM TBL_INSCRICAO WHERE aln_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

}