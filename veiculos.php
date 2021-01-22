<?php

class Veiculo {
    // Atributos
    protected $modelo;  // visibilidade protected faz com que todos os herdeiros vejam as propriedades
                        // protegidas como se fossem públicas, mas para isso é obrigatório incluir getters
                        // e setters ou na classe pai ou nas classes que herdam para utilizar os atributos
                        // protegidos fora das classes.
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

    // Getters e setters do atributo protected
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
}

class Moto extends Veiculo{
    public function empinar() {
        echo "Empinando...";
    }
}

$carro = new Carro();
$carro->setModelo("Railuk toda equipada");
$carro->cor = "Cinza";
$carro->ano = 2022;
$carro->andar();

echo "<pre>";
print_r($carro);
echo "</pre>";