<?php

class Pessoa {
    public $idade;

    // método mágico que será chamado toda vez que fizermos um clone de alguma instância da classe
    public function __clone() {
        echo "<hr>Clonagem de objetos<hr>";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

// pessoa2 é um objeto que faz referência ao objeto pessoa
$pessoa2 = $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade; // imprime 35

// invés de fazer uma referência, é possível fazer um clone
$pessoa3 = clone $pessoa;
$pessoa3->idade = 35;

echo $pessoa->idade; // imprime 25