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

    public function save($titulo, $tipo, $responsavel, $limite, $local, $data, $hora, $gratuito, $valor)
    {
        $extensao = new AtividadeExtensaoModel;
        $extensao->setTitulo($titulo);
        $extensao->setTipo($tipo);
        $extensao->setResponsavel($responsavel);
        $extensao->setLimiteInscricao($limite);
        $extensao->setLocal($local);
        $extensao->setData($data);
        $extensao->setHora($hora);
        $extensao->setGratuito($gratuito);
        $extensao->setValor($valor);
        return $this->AtividadeExtensaoDao->save($extensao);

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