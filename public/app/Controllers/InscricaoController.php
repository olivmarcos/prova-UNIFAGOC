<?php
namespace Controller;

use Dao\InscricaoDao;
use Model\InscricaoModel;

class InscricaoController {

    private $inscricaoDao;

    public function __construct()
    {
        $this->inscricaoDao = new InscricaoDao;
    }

    public function save($alunoId, $inscricaoId)
    {
        $inscricao = new InscricaoModel();

        if($this->inscricaoDao->save($inscricao))
        {
            echo 'ok'
        }
        else
            echo 'not ok';
    }
}