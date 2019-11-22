<?php

namespace Dao;
use Model\AtividadeExtensaoModel;
use Model\Conexao;
use PDO;

class AtividadeExtensaoDao {

    private $con;

    public function __construct()
    {
        $this->con = Conexao::getInstance();
    }

    public function save(AtividadeExtensaoModel $atividade)
    {
        $stmt = $this->con->prepare("INSERT INTO TBL_ATIVIDADE_EXTENSAO(ate_titulo, ate_tipo, ate_responsavel, ate_limite_inscricao, ate_local, ate_data, ate_hora, ate_gratuito, ate_valor)"
        . "VALUES (:titulo, :tipo, :responsavel, :limite, :local, :data, :hora, :gratuito, :valor");
        $stmt->bindParam(':titulo', $atividade->getTitulo());
        $stmt->bindParam(':tipo', $atividade->getTipo());
        $stmt->bindParam(':responsavel', $atividade->getResponsavel());
        $stmt->bindParam(':limite', $atividade->getLimiteInscricao());
        $stmt->bindParam(':local', $atividade->getLocal());
        $stmt->bindParam(':data', $atividade->getData());
        $stmt->bindParam(':hora', $atividade->getHora());
        $stmt->bindParam(':gratuito', $atividade->getGratuito());
        $stmt->bindParam(':valor', $atividade->getValor());
        
        return $stmt->execute();
    }

    public function recoverById($id)
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_ATIVIDADE_EXTENSAO WHERE ate_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function recoverAll()
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_ATIVIDADE_EXTENSAO");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update(AtividadeExtensaoModel $atividade, $id)
    {
        $stmt = $this->con->prepare("UPDATE TBL_ATIVIDADE_EXTENSAO SET ate_titulo = :titulo, ate_tipo = :tipo, ate_responsavel = :responsavel, ate_limite_inscricao = :limite, ate_local = :local, ate_data = :data, ate_hora = :hora, ate_gratuito = :gratuito, ate_valor = :valor WHERE ate_id = :id");
        $stmt->bindParam(':titulo', $atividade->getTitulo());
        $stmt->bindParam(':tipo', $atividade->getTipo());
        $stmt->bindParam(':responsavel', $atividade->getResponsavel());
        $stmt->bindParam(':limite', $atividade->getLimiteInscricao());
        $stmt->bindParam(':local', $atividade->getLocal());
        $stmt->bindParam(':data', $atividade->getData());
        $stmt->bindParam(':hora', $atividade->getHora());
        $stmt->bindParam(':gratuito', $atividade->getGratuito());
        $stmt->bindParam(':valor', $atividade->getValor());
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->con->prepare("DELETE FROM TBL_ATIVIDADE_EXTENSAO WHERE ate_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}