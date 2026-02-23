<?php

require_once "Controller/ProdutoController.php";

$ProdutoControler = new ProdutoController();
$route = $_GET["route"] ?? '';

switch ($route){
    case 'Produto/telaCadastro':
        $ProdutoControler -> telaCadastro();
        break;

    case "Produto/salvar":
        $ProdutoControler->cadastrar();
        break;

    case "Produto/listar":
        $ProdutoControler->listarProduto();
        break;

    default:
        echo "Pagina não encontrada";
        break;
}