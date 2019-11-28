<?php
namespace Controller;

use Dao\AlunoDao;
use Model\AlunoModel;

class AlunoController {

    private $AlunoDao;

    public function __construct()
    {
        $this->AlunoDao = new AlunoDao();
    }

    public function save(AlunoModel $aluno)
    {
        return $this->AlunoDao->save($aluno);

    }

    public function recoverById($id)
    {
        return $this->AlunoDao->recoverById($id);
    }

    public function recoverAll()
    {
        return $this->AlunoDao->recoverAll();
    }

    public function update(AlunoModel $aluno, $id)
    {
        return $this->AlunoDao->update($aluno, $id);
    }

    public function delete($id)
    {
        $this->AlunoDao->delete($id);
    }
}