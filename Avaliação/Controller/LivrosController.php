<?php

session_start();
require_once "./model/LivrosModel.php";

class LivrosController{
    public function telaCadastro(){
        require "View/LivrosCadastrar.php";
    }

    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $editora = $_POST['editora'];
        $ano = $_POST['ano'];

        $Livros = new Livros ($titulo, $autor, $editora, $ano);
        $Livros->salvar();
        header('Locatio: /PB_PHP/Avaliação/Livros/telaCadastro');
        exit;
    }

    public function listarLivros(){
        $Livros = Livros::listar();
        echo "<pre>";
        print_r($Livros);
        echo "</pre>";
        require 'View/LivrosListar.php';
    }

    public function telaEditar(){
        $Livros = Livros::buscar($_GET['id']);
        print_r($Livros);
        require 'View/LivrosEditar.php';
    }

   
    public function atualizado(){
        $Livros = new Livros($_POST['titulo'], $_POST['autor'], $_POST['editora'], $_POST['ano']);
        $Livros->atualizar($_GET['id']);
        header('Location: /PB_PHP/Avaliação/Livros/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Livros::excluir($_GET['id']);
        header('Location: /PB_PHP/Avaliação/Livros/listar');
        exit;
    } 
}