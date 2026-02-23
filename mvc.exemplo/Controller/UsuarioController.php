<?php

session_start();
require_once"./Model/UsuarioModel.php";

class UsuarioController{

    public function telaCadastro(){
        session_destroy();
        require "View/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome, $email);
        $usuario->salvar();
        header('Location: /PB_PHP/mvc.exemplo/usuario/telaCastro');
        exit;
    }

    public function listarUsuario(){
        $usuario = Usuario::listar();
        echo "<pre>";
        print_r($usuario);
        echo "</pre>";
        require 'View/UsuarioListar.php';
    }
}