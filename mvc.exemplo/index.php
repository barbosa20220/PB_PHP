<?php

require_once "Controller/UsuarioController.php";

$usuarioControler = new UsuarioController();
$route = $_GET["route"] ?? '';

switch ($route){
    case 'usuario/telaCadastro':
        $usuarioControler -> telaCadastro();
        break;

    case "usuario/salvar":
        $usuarioControler->cadastrar();
        break;

    case "usuario/listar":
        $usuarioControler->listarUsuario();
        break;

    default:
        echo "Pagina não encontrada";
        break;
}