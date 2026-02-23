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
}