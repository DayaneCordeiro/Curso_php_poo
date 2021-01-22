<?php

class Pessoa {
    // constante não usa o '$'
    const nome = "Dayane";

    public function exibirNome() {
        // para referenciar uma constante no escopo da classe utiliza-se o self
        echo self::nome;
    }
}

class Dayane extends Pessoa {
    const nome = "Cordeiro";
    
    public function exibirNome() {
        echo self::nome;
        echo "<br>";
        // para referenciar a constante da classe PAI, utiliza-se o parent
        echo parent::nome;
    }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();
echo "<br>";
$dayane = new Dayane();
$dayane-> exibirNome();