<?php

class Livros{
    private $titulo;
    private $autor;
    private $editora;
    private $ano;

    public function __construct($titulo, $autor, $editora, $ano){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->ano = $ano;

    }

    public function salvar(){
        if(!isset($_SESSION['Livros'])){
            $_SESSION['Livros'] = [];
        }

        $_SESSION['Livros'][] = [
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'editora' => $this->editora,
            'ano' => $this->ano
        ];
    }


    public static function listar(){
        return $_SESSION['Livros'] ?? [];
    }

    public static function buscar($id){
        return $_SESSION['Livros'][$id] ?? null;
    }

    public function atualizar($id){
        if(isset($_SESSION['Livros'][$id])){
            $_SESSION['Livros'][$id] = [
                'titulo' => $this->titulo,
                'autor' => $this->autor,
                'editora' => $this->editora,
                'ano' => $this->ano
            ];
        }
    }

    public static function excluir ($id){
        if(isset($_SESSION['Livros'][$id])){
            unset($_SESSION['Livros'][$id]);
        }
    }
}