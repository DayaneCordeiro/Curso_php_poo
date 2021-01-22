<?php

class Animal {
    public function andar() {
        echo "O animal andou";
    }

    public function correr() {
        echo "O animal correu";
    }
}

class Cavalo extends Animal {
    // polimorfismo = reescrever ou substituir um método herdado da superclasse
    public function andar() {
        $this->correr();
    }
}

$animal = new Cavalo();
$animal->andar();