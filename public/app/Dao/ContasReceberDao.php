<?php
namespace Dao;

use Model\Conexao;
use Model\ContasReceberModel;
use PDO;

class ContasReceberDao {

    private $con;

    public function __construct()
    {
        $this->con = Conexao::getInstance();
    }

    public function save(ContasReceberModel $conta)
    {
        $stmt = $this->con->prepare("INSERT INTO TBL_CONTAS_RECEBER(ctr_boleto, ctr_valor, ctr_dataVencimento, ctr_descricao, ctr_INS_ID)"
        . "VALUES (:boleto, :valor, :vencimento, :descricao, :inscricao");
        $stmt->bindParam(':boleto', $conta->getBoleto());
        $stmt->bindParam(':valor', $conta->getValor());
        $stmt->bindParam(':vencimento', $conta->getDataVencimento());
        $stmt->bindParam(':descricao', $conta->getDescricao());
        $stmt->bindParam(':inscricao', $conta->getInscricaoId());
        return $stmt->execute();
    }

    public function recoverById($id)
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_CONTAS_RECEBER WHERE ctr_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function recoverAll()
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_CONTAS_RECEBER");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function delete($id)
    {
        $stmt = $this->con->prepare("DELETE FROM TBL_CONTAS_RECEBER WHERE ctr_id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}