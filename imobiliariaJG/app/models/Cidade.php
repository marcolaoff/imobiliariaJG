<?php

class Cidade 
{
    public $id;
    public $nome;
    public $estado;

    public function __construct(string $nome, string $estado)
    {
        $this->setNome($nome);
        $this->setEstado($estado);
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getEstado() : string
    {
        return $this->estado;
    }

    public function setId($id)
    {
        if ($this->id === null) {
            $this->id = $id;
        }
    }

    public function setNome ($nome)
    {
        $nome = trim ($nome);
        //Simples validação
        if (empty($nome)) {
            throw new Exception("O nome da cidade é obrigatório");
        }
        $this->nome = $nome;
    }

    public function setEstado ($estado)
    {
        $estado = strtoupper(trim($estado));
        //Simples validação
        if (strlen($estado) !== 2) {
            throw new Exception("O estado deve conter exatamente 2 letras");
        }
        $this->estado = $estado;
    }
}