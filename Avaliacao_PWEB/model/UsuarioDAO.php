<?php
require_once 'Database.php';

class UsuarioDAO {
    private $conexao;

    function __construct() {
        $Database = new Database;
        $this->conexao = $Database->getConexao();
    }

    function cadastrar($usuario) {
        $stmt = $this->conexao->prepare("INSERT INTO usuarios (nome, cpf, senha) VALUES (:nome, :cpf, :senha)");
        $stmt->bindValue(':nome', $usuario->getNome());
        $stmt->bindValue(':cpf', $usuario->getCpf());
        $stmt->bindValue(':senha', $usuario->getSenha());
        return $stmt->execute();
    }
    
    function login($usuario) {
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios WHERE senha = :senha AND cpf = :cpf");
        $stmt->bindValue(':senha', $usuario->getSenha());
        $stmt->bindValue(':cpf', $usuario->getCpf());
        $stmt->execute();

        if(count($stmt->fetchAll()) == 1) {
            return true;
        }

        return false;
    }
}

?>