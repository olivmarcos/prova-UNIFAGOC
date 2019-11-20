<?php
namespace Controller;

use Dao\AtividadeExtensaoDao;
use Model\AtividadeExtensaoModel;

class AtividadeExtensaoController {

    private $AtividadeExtensaoDao;

    public function __construct()
    {
        $this->AtividadeExtensaoDao = new AtividadeExtensaoDao();
    }

    public function save()
    {
        $aluno = new AtividadeExtensaoModel();
        $aluno->setName("Teste");
        $aluno->setBiography("Testando");
        $aluno->setPhoto("photo.png");

         if($this->AtividadeExtensaoDao->save($aluno))
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
        return $this->AtividadeExtensaoDao->recoverById($id);
    }

    public function recoverAll()
    {
        var_dump($this->AtividadeExtensaoDao->recoverAll());
    }

    public function update()
    {
        $aluno = new AtividadeExtensaoModel();
        $aluno->setNome("Teste56454");
        $aluno->setSexo("Indefinido");
        $aluno->setDataNascimento("2019-02-02");
        $aluno->setCpf("1258795");
        $id = 5;

        if($this->AtividadeExtensaoDao->update($aluno, $id))
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
        $this->AtividadeExtensaoDao->delete($id);
    }
}