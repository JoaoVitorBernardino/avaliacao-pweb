<?php

class Usuario {
    private $nome;
    private $cpf;
    private $senha;

    private $conexao;    

    function __construct() {
        $Database = new Database();
        $this->conexao = $Database->getConexao();
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
}

?>