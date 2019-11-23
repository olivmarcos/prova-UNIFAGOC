<?php
namespace Controller;

use Dao\ContasReceberDao;
use Model\ContasReceberModel;

class ContasReceberController {

    private $contasReceberDao;

    public function __construct()
    {
        $this->contasReceberDao = new ContasReceberDao();
    }

    public function save(ContasReceberModel $contas)
    {
        return $this->contasReceberDao->save($contas);

    }

    public function recoverById($id)
    {
        return $this->contasReceberDao->recoverById($id);
    }

    public function recoverAll()
    {
        var_dump($this->contasReceberDao->recoverAll());
    }

    public function delete($id)
    {
        return $this->contasReceberDao->delete($id);
    }
}