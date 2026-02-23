<?php

class Produto{
    private $Nome;
    private $Preço;
    private $Quantidade;
    private $Validade;

    public function __construct($Nome, $Preço, $Quantidade, $Validade){
        $this->Nome = $Nome;
        $this->Preço = $Preço;
        $this->Quantidade = $Quantidade;
        $this->Validade = $Validade;

    }

    public function salvar(){
        if(!isset($_SESSION['Produto'])){
            $_SESSION['Produto'] = [];
        }

        $_SESSION['Produto'][] = [
            'Nome' => $this->Nome,
            'Preço' => $this->Preço,
            'Quantidade' => $this->Quantidade,
            'Validade' => $this->Validade
        ];
    }


    public static function listar(){
        return $_SESSION['Produto'] ?? [];
    }
}