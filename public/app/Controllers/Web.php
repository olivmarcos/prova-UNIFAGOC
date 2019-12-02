<?php

namespace Controller;

use Dao\AlunoDao;
use Dao\AtividadeExtensaoDao;
use Dao\InscricaoDao;
use Dao\UsuarioDao;
use League\Plates\Engine;
use Model\AtividadeExtensaoModel;
use Model\InscricaoModel;
use Model\UsuarioModel;

class Web {

    private $view;

    public function __construct()
    {
        $this->view = Engine::create("app/Views", "php");
    }

    public function home(): void
    {
        echo $this->view->render('Home', [
            "title" => "Nome - Site"
        ]);
    }

    public function autocompleteAluno(): void
    {
        $aluno = new AlunoDao;
        $aluno->autoCompleteAluno();
    }

    public function autocompleteAtividade(): void
    {
        $atividade = new AtividadeExtensaoDao;
        $atividade->autoCompleteAtividade();
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

        $cadastro = new AlunoController;
        if($cadastro->save($nome, $sexo, $dataNascimento, $cpf))
        {
            header('Location: /listar/aluno');
        }
        else {
            echo 'erro';
        }
    }

    public function salvarExtensao()
    {
        // var_dump($_POST);

        $titulo = $_POST['titulo'];
        $tipo = $_POST['tipo'];
        $responsavel = $_POST['responsavel'];
        $limite = $_POST['limite'];
        $local = $_POST['local'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];
        $gratuito = $_POST['gratuito'];
        $valor = $_POST['valor'];

        if($tipo == "Projeto")
        {
            $gratuito = '1';
            $valor = '0';
        }

        $cadastro = new AtividadeExtensaoController;
        if($cadastro->save($titulo, $tipo, $responsavel, $limite, $local, $data, $hora, $gratuito, $valor))
        {
            header('Location: /listar/atividade');
        }
        else {
            echo 'erro';
        }
    }

    public function inscricao()
    {
        echo $this->view->render('InscricaoView', [
            'title' => "Inscricao"
        ]);
    }

    public function realizarInscricao()
    {
        $alunoId = $_POST['aluno-id'];
        $atividadeId = $_POST['atividade-id'];
        $cpf = $_POST['aluno-cpf'];

        $cadastro = new InscricaoController;
        if(isset($alunoId) && isset($atividadeId) && isset($cpf))
        {
            $cadastro->save($alunoId, $atividadeId, $cpf);
            header('Location: /listar/inscricao');
        }
        else{
            echo 'erro';
        }
    }

    public function login()
    {
        $nome = $_POST['nome'];
        $password = $_POST['password'];
        $usuario = new UsuarioController;

        if($usuario->recoverByName($nome, $password))
        {
            header('Location: /painel');
        }
        else
        {
            echo 'usuario não existe';
        }
    }

    public function painel(): void
    {
        echo $this->view->render('PainelView', [
            "title" => "Painel de Controle"
        ]);
    }

    public function listarAlunos(): void
    {
        $alunos = (new AlunoController())->recoverAll();
        
        echo $this->view->render('TabelaAluno', [
            "title" => "Nome - Site",
            "alunos" => $alunos
        ]);
    }

    public function listarAtividades(): void
    {
        $atividades = (new AtividadeExtensaoController())->recoverAll();
        
        echo $this->view->render('TabelaAtividade', [
            "title" => "Nome - Site",
            "atividades" => $atividades
        ]);
    }

    public function listarInscricoes(): void
    {
        $inscricoes = (new InscricaoController())->recoverAll();
        
        echo $this->view->render('TabelaInscricao', [
            "title" => "Nome - Site",
            "inscricoes" => $inscricoes
        ]);
    }


    public function geraBoleto()
    {
        $boleto = (new InscricaoController())->verificaData(9);
        $a = $boleto;
        var_dump($a);
        var_dump(date('Y-m-d'));
    }

    public function error($data)
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
        var_dump($data);
    }

    
}