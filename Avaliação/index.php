<?php

require_once "Controller/LivrosController.php";

$LivrosControler = new LivrosController();
$route = $_GET["route"] ?? '';

switch ($route){
    case 'Livros/telaCadastro':
        $LivrosControler -> telaCadastro();
        break;

    case "Livros/salvar":
        $LivrosControler->cadastrar();
        break;

    case "Livros/listar":
        $LivrosControler->listarlivros();
        break;
    
    case "Livros/telaEditar":
        $LivrosControler->telaEditar();
        break;

    case "Livros/atualizado":
        $LivrosControler->atualizado();
        break;
    
    case "Livros/excluir":
        $LivrosControler->excluir();
        break;

    default:
        echo "Pagina não encontrada";
        break;
}