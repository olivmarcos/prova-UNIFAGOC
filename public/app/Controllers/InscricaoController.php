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

    public function save($alunoId, $atividadeId, $cpf)
    {
        $inscricao = new InscricaoModel();
        $inscricao->setAlunoId($alunoId);
        $inscricao->setAtividadeExtensaoId($atividadeId);

        if($this->verificaLimite($atividadeId))
        {
            if (!$this->verificaCpf($cpf, $atividadeId))
            {
                if($this->verificaGratuidade($atividadeId))
                {
                    $this->inscricaoDao->save($inscricao);
                    echo "Registro realizado com sucesso";
                    return;
                }
                else 
                {
                    $this->inscricaoDao->save($inscricao);
                    echo "Registro realizado com sucesso";
                    return;
                }
        
            }
            echo "CPF já inscrito!";
            return;
            
        } 
        echo "O limite de inscrição foi atigindo!";
        return;
    }

    public function verificaLimite($atividadeId)
    {
        $atividade = new AtividadeExtensaoController;
        $rows = $this->inscricaoDao->verificarLimite($atividadeId);
        $atv = $atividade->recoverById($atividadeId);
        return ($rows < $atv['ate_limite_inscricao']);/*Verifica se o limite de inscritos na atividade de extensão não foi ultrapassado */
    }

    public function recoverById($id)
    {
        return $this->inscricaoDao->recoverById($id);
    }

    public function recoverAll()
    {
        return $this->inscricaoDao->recoverAll();
    }

    public function delete($id)
    {
        $this->inscricaoDao->delete($id);
    }

    public function verificaCpf($cpf, $id)
    {
        $cpfs = $this->inscricaoDao->verificarCpf($id);
        foreach ($cpfs as $value) {
            if(strcmp($value['aln_cpf'], $cpf) == 0){ 
                return true;
            }
        }
        return false;
    }

    public function verificaGratuidade($atividadeId)
    {
        $atividade = new AtividadeExtensaoController;
        $atv = $atividade->recoverById($atividadeId);
        return ($atv['ate_gratuito'] == 1);
    }

    public function geraBoleto()
    {
        $aluno = new AlunoController;
        $aln = $aluno->recoverById(4);
        $atividade = new AtividadeExtensaoController;
        $atv = $atividade->recoverById(3);

        $cpf = $aln['aln_cpf'];
        $valor = str_replace('.', '', $atv['ate_valor']);
        $vencimento = date('Y-m-d', strtotime("-1 day", strtotime($atv['ate_data'])));

        $data = array("cpf" => $cpf, "valor" => $valor, "vencimento" => $vencimento);
        $data_string = json_encode($data);

        $ch = curl_init('https://prova-dev-unifagoc.herokuapp.com/api/v1/boleto');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
        );

        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        echo $result;
    }
}