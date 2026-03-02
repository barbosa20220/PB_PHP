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

    case "Produto/atualizado":
        $ProdutoControler->atualizar();
        break;
    
    case "Produto/excluir":
        $ProdutoControler->excluir();
        break;

    default:
        echo "Pagina não encontrada";
        break;
}