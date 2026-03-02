<?php

session_start();
require_once"./Model/ProdutoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/ProdutoCadastrar.php";
    }

    public function cadastrar(){
        $Nome = $_POST['Nome'];
        $Preço = $_POST['Preço'];
        $Quantidade = $_POST['Quantidade'];
        $Validade = $_POST['Validade'];
        

        $Produto = new Produto($Nome, $Preço, $Quantidade, $Validade);
        $Produto->salvar();
        header('Location: /PB_PHP/Atividade01/Produto/telaCadastro');
        exit;
    }

    public function listarProduto(){
        $Produto = Produto::listar();
        echo "<pre>";
        print_r($Produto);
        echo "</pre>";
        require 'View/ProdutoListar.php';
    }
    public function telaEditar(){
        $Produto = Produto::buscar($_GET['id']);
        require 'View/ProdutoEditar.php';
    }

    public function atuaizado(){
        $Produto = new Produto($_POST['nome'], $_POST['email']);
        $Produto->atuaizadar($_GET['id']);
        header('Location: /PB_PHP/mvc.exemplo/Produto/listartelaCadastro?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Produto::excluir($_GET['id']);
        header('Location/PB_PHP/mvc.exemplo/Produto/listar');
        exit;
    }
}
