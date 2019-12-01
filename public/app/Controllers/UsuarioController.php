<?php

namespace Controller;

use Model\UsuarioModel;
use Dao\UsuarioDao;

class UsuarioController
{
    private $usuarioDao;

    public function __construct()
    {
        $this->usuarioDao = new UsuarioDao;
    }

    public function save($nome, $password)
    {
        $usuario = new UsuarioModel;
        $usuario->setNome($nome);
        $usuario->setPassword($password);

        return $this->usuarioDao->save($usuario);
    }

    public function recoverByName($nome, $password)
    {
        return $this->usuarioDao->recoverByName($nome, $password);
    }
}