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

    public function register()
    {
        echo "<h1>Register</h1>";
    }

    public function error($data)
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
        var_dump($data);
    }
}