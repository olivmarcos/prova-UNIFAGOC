<?php
namespace Dao;

use Model\AlunoModel;
use Model\Conexao;
use PDO;

class AlunoDao {

    private $con;

    public function __construct()
    {
        $this->con = Conexao::getInstance();
    }

    public function save(AlunoModel $aluno)
    {
        $stmt = $this->con->prepare("INSERT INTO TBL_ALUNO(aln_nome, aln_sexo, aln_dataNascimento, aln_cpf)"
        . "VALUES (:nome, :sexo, :dataNascimento, :cpf)");
        $stmt->bindParam(':nome', $aluno->getNome());
        $stmt->bindParam(':sexo', $aluno->getSexo());
        $stmt->bindParam(':dataNascimento', $aluno->getDataNascimento());
        $stmt->bindParam(':cpf', $aluno->getCpf());
        
        if ($stmt->execute())
        {
            echo 'ok';
        }
        else
            echo 'not ok';
    }

    public function recoverById($id)
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_ALUNO WHERE aln_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($result);
    }

    public function recoverAll()
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_ALUNO");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

    public function update(alunoModel $aluno, $id)
    {
        $stmt = $this->con->prepare("UPDATE TBL_ALUNO SET art_name = :name, art_biography = :bio, art_photo = :photo WHERE art_id = :id");
        $stmt->bindParam(':name', $aluno->getName());
        $stmt->bindParam(':bio', $aluno->getBiography());
        $stmt->bindParam(':photo', $aluno->getPhoto());
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    public function delete($id)
    {
        $stmt = $this->con->prepare("DELETE FROM TBL_ALUNO WHERE art_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}