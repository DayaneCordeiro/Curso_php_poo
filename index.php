<?php

class Pessoa {
    // Atributos
    public $nome;
    public $idade;

    // Métodos
    public function falar() {
        echo "Meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
}

// Instanciando a classe pessoa
$dayane = new Pessoa();

$dayane->nome = "Dayane Cordeiro";
$dayane->idade = 25;
$dayane->falar();

//var_dump($dayane); // Esta função mostrará uma representação estruturada sobre uma ou mais expressões,
                     // incluindo o tipo e o valor. Arrays e objetos são explorados recursivamente com
                     // valores identados na estrutura mostrada.