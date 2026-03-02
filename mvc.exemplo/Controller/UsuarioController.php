<?php

session_start();
require_once"./Model/UsuarioModel.php";

class UsuarioController{

    public function telaCadastro(){
        
        require "View/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome, $email);
        $usuario->salvar();
        header('Location: /PB_PHP/mvc.exemplo/usuario/telaCadastro');
        exit;
    }

    public function listarUsuario(){
        $usuario = Usuario::listar();
        echo "<pre>";
        print_r($usuario);
        echo "</pre>";
        require 'View/UsuarioListar.php';
    }

    public function telaEditar(){
        $usuario = usuario::buscar($_GET['id']);
        require 'View/usuarioEditar.php';
    }

    public function atuaizado(){
        $usuario = new Usuario($_POST['nome'], $_POST['email']);
        $usuario->atuaizadar($_GET['id']);
        header('Location: /PB_PHP/mvc.exemplo/usuario/telaCadastro?id='.($_GET['id']));
        exit;
    }
}