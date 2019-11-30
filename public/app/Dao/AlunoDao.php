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
        return $stmt->execute();
    }

    public function recoverById($id)
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_ALUNO WHERE aln_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function recoverAll()
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_ALUNO");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update(AlunoModel $aluno, $id)
    {
        $stmt = $this->con->prepare("UPDATE TBL_ALUNO SET aln_nome = :name, aln_sexo = :sexo, aln_dataNascimento = :dataNascimento, aln_cpf = :cpf WHERE aln_id = :id");
        $stmt->bindParam(':name', $aluno->getNome());
        $stmt->bindParam(':sexo', $aluno->getSexo());
        $stmt->bindParam(':dataNascimento', $aluno->getDataNascimento());
        $stmt->bindParam(':cpf', $aluno->getCpf());
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
    public function delete($id)
    {
        $stmt = $this->con->prepare("DELETE FROM TBL_ALUNO WHERE aln_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function autoCompleteAluno()
    {
        $nome = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);
        $stmt = $this->con->prepare("SELECT aln_id, aln_nome, aln_cpf FROM TBL_ALUNO WHERE aln_nome LIKE '%".$nome."%' ORDER BY aln_nome LIMIT 10");
        $stmt->execute();

        while($results = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            // $data[] = $results['aln_id'];
            $data[] = $results['aln_nome'];
            // $data[] = $results['aln_cpf'];
        }
        
        echo json_encode($data);
    }
}