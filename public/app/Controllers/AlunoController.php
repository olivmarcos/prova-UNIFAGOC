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

    public function save()
    {
        $aluno = new alunoModel();
        $aluno->setName("Teste");
        $aluno->setBiography("Testando");
        $aluno->setPhoto("photo.png");

         if($this->AlunoDao->save($aluno))
         {
             echo "ok";
         }
         else
         {
             echo "not ok";
         }
    }

    public function recoverById($id)
    {
        $this->AlunoDao->recoverById($id);
    }

    public function recoverAll()
    {
        var_dump($this->AlunoDao->recoverAll());
    }

    public function update()
    {
        $aluno = new AlunoModel();
        $aluno->setNome("Teste56454");
        $aluno->setSexo("Indefinido");
        $aluno->setDataNascimento("2019-02-02");
        $aluno->setCpf("1258795");
        $id = 5;

        if($this->AlunoDao->update($aluno, $id))
        {
            echo "ok";
        }
        else
        {
            echo "not ok";
        }
    }

    public function delete($id)
    {
        $this->AlunoDao->delete($id);
    }
}