<?php
namespace Model;

class AtividadeExtensaoModel {

    private $titulo;
    private $tipo;
    private $responsavel;
    private $limiteInscricao;
    private $local;
    private $data;
    private $hora;
    private $gratuito;
    private $valor;

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        // if(strcmp($this->tipo, "Projeto") == 0)
        // {
        //     $this->setGratuito(1);
        //     $this->setValor(0);
        // }
    }

    /**
     * @return mixed
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * @param mixed $responsavel
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;
    }

    /**
     * @return mixed
     */
    public function getLimiteInscricao()
    {
        return $this->limiteInscricao;
    }

    /**
     * @param mixed $limiteInscricao
     */
    public function setLimiteInscricao($limiteInscricao)
    {
        $this->limiteInscricao = $limiteInscricao;
    }

    /**
     * @return mixed
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * @param mixed $local
     */
    public function setLocal($local)
    {
        $this->local = $local;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    /**
     * @return mixed
     */
    public function getGratuito()
    {
        return $this->gratuito;
    }

    /**
     * @param mixed $gratuito
     */
    public function setGratuito($gratuito)
    {
        $this->gratuito = $gratuito;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

}