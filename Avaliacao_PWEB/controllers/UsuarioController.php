<?php
require_once 'model/UsuarioModel.php';
require_once 'model/UsuarioDAO.php';

class UsuarioController {
    private $usuario;
    private $usuarioDAO;

    function cadastrar() {
        $this->usuario = new Usuario();
        $this->usuarioDAO = new UsuarioDAO();
        $this->usuario->setNome($_REQUEST["nome"]);
        $this->usuario->setCpf($_REQUEST["cpf"]);
        $this->usuario->setSenha($_REQUEST['senha']);
        if($this->usuarioDAO->cadastrar($this->usuario)) {
            $_REQUEST['sucesso'] = true;
            echo 'Usuario cadastrado com sucesso!';
        } else {
            echo 'Erro ao cadastrar o usuário';
        }
    }

    function login() {
        $this->usuario = new Usuario();
        $this->usuarioDAO = new UsuarioDAO();
        $this->usuario->setCpf($_REQUEST["cpf"]);
        $this->usuario->setSenha($_REQUEST["senha"]);
        if($this->usuarioDAO->login($this->usuario)) {
            $_REQUEST['sucesso'] = true;
            echo "Login feito com sucesso!";
        } else {
            echo "Erro! Ocorreu algum problema ao tentar fazer login.";
        }
    }
}
?>