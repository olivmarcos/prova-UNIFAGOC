<?php
namespace Dao;

use Model\Conexao;
use PDO;

class ConstasReceberDao {

    private $con;

    public function __construct()
    {
        $this->con = Conexao::getInstance();
    }

    public function save($boleto, $vencimento, $descricao, $atividade, $valor)
    {
        $stmt = $this->con->prepare("INSERT INTO TBL_CONTAS_RECEBER(ctr_boleto, ctr_dataVencimento, ctr_descricao, ctr_INS_ID, ctr_valor)"
        . "VALUES (:boleto, :vencimento, :descricao, :atividade, :valor");
        $stmt->bindParam(':boleto', $boleto);
        $stmt->bindParam(':vencimento', $vencimento);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':atividade', $atividade);
        $stmt->bindParam(':valor', $valor);

        var_dump($boleto);
        $a =  $stmt->execute();
        var_dump($a);
    }

    public function delete($id)
    {
        $stmt = $this->con->prepare("DELETE FROM TBL_CONTAS_RECEBER WHERE ctr_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}