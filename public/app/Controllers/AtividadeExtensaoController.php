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

    public function save(AtividadeExtensaoModel $atividade)
    {
        return $this->AtividadeExtensaoDao->save($atividade);
    }

    public function recoverById($id)
    {
        return $this->AtividadeExtensaoDao->recoverById($id);
    }

    public function recoverAll()
    {
        var_dump($this->AtividadeExtensaoDao->recoverAll());
    }

    public function update(AtividadeExtensaoModel $atividade, $id)
    {
        return $this->AtividadeExtensaoDao->update($atividade, $id);
    }

    public function delete($id)
    {
        $this->AtividadeExtensaoDao->delete($id);
    }
}