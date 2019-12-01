<?php
namespace Dao;

use Model\Conexao;
use Model\UsuarioModel;
use PDO;

class UsuarioDao {

    private $con;

    public function __construct()
    {
        $this->con = Conexao::getInstance();
    }

    public function save(UsuarioModel $usuario)
    {
        $stmt = $this->con->prepare("INSERT INTO TBL_USUARIO(usu_nome, usu_password)" .
        "VALUES (:nome, :pass)");
        $stmt->bindParam(':nome', $usuario->getNome());
        $stmt->bindParam(':pass',  $usuario->getPassword());
        return $stmt->execute();
    }

    public function recoverByName($nome, $password)
    {
        $stmt = $this->con->prepare("SELECT * FROM TBL_USUARIO WHERE usu_nome LIKE '%".$nome."%' AND usu_password = :password");
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}