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

    public function save($nome, $sexo, $dataNascimento, $cpf)
    {
        $aluno = new alunoModel();
        $aluno->setNome($nome);
        $aluno->setSexo($sexo);
        $aluno->setDataNascimento($dataNascimento);
        $aluno->setCpf($cpf);

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
        return $this->AlunoDao->recoverById($id);
    }

    public function recoverAll()
    {
        $teste =  $this->AlunoDao->recoverAll();
        var_dump($teste);
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

    public function hello()
    {
        echo "hello wsdorld";
    }
}