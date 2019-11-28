<?php

namespace Controller;

use League\Plates\Engine;

class Web {

    private $view;

    public function __construct()
    {
        $this->view = Engine::create("app/Views", "php");
    }

    public function home(): void
    {
        $alunos = (new AlunoController())->recoverAll();
        // var_dump($alunos);
        echo $this->view->render('Home', [
            "title" => "Nome - Site",
            "alunos" => $alunos
        ]);
    }

    public function cadastro(): void
    {
        echo $this->view->render('AlunoView', [
            "title" => "Cadastro de Alunos"
        ]);
    }

    public function cadastroExtensao(): void
    {
        echo $this->view->render('AtividadeExtensaoView', [
            "title" => "Cadastro de Atividades"
        ]);
    }

    public function salvarAluno()
    {
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $dataNascimento = $_POST['data'];
        $cpf = $_POST['cpf'];

        var_dump($_POST);

        $cadastro = new AlunoController;
        $cadastro->save($nome, $sexo, $dataNascimento, $cpf);
    }

    public function salvarExtensao()
    {
        var_dump($_POST);
    }
    
    public function error($data)
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
        var_dump($data);
    }
}