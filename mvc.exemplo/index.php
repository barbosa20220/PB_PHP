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

    case "usuario/telaEditar":
        $usuarioControler->telaEditar();
        break;

    case "usuario/utualizado":
        $usuarioControler->atualizar();
        break;

    default:
        echo "Pagina não encontrada";
        break;


}