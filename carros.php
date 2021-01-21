<?php

class Veiculo {
    // Atributos
    public $modelo;
    public $cor;
    public $ano;

    // Métodos
    public function andar() {
        echo "Andando";
    }

    public function parar() {
        echo "Parei";
    }
}

class Carro extends Veiculo {
    public function ligarLimpadorParabrisas () {
        echo "Limpando o parabrisas...";
    }
}

class Moto extends Veiculo{
    public function empinar() {
        echo "Empinando...";
    }
}

$carro = new Carro();
$carro->modelo = "Railuk toda equipada";
$carro->cor = "Cinza";
$carro->ano = 2022;
$carro->andar();

var_dump($carro);