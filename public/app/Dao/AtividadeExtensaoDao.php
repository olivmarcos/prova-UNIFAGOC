<?php
namespace Dao;

class AtividadeExtensaoDao {


    private $con;

    public function __construct()
    {
        $this->con = Conexao::getInstance();
    }

    public function save(AlunoModel $aluno)
    {
        $stmt = $this->con->prepare("INSERT INTO TBL_ATIVIDADE_EXTENSAO(aln_nome, aln_sexo, aln_dataNascimento, aln_cpf)"
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
        $stmt = $this->con->prepare("SELECT * FROM TBL_ATIVIDADE_EXTENSAO WHERE aln_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($result);
    }

    public function recoverAll()
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_ATIVIDADE_EXTENSAO");
        $stmt->execute();
        $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public function update(AlunoModel $aluno, $id)
    {
        $stmt = $this->con->prepare("UPDATE TBL_ATIVIDADE_EXTENSAO SET aln_nome = :name, aln_sexo = :sexo, aln_dataNascimento = :dataNascimento, aln_cpf = :cpf WHERE aln_id = :id");
        $stmt->bindParam(':name', $aluno->getNome());
        $stmt->bindParam(':sexo', $aluno->getSexo());
        $stmt->bindParam(':dataNascimento', $aluno->getDataNascimento());
        $stmt->bindParam(':cpf', $aluno->getCpf());
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    public function delete($id)
    {
        $stmt = $this->con->prepare("DELETE FROM TBL_ATIVIDADE_EXTENSAO WHERE aln_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}