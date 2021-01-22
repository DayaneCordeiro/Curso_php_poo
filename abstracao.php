<?php

// Classe que serve apenas de modelo para as que irão extendê-la
abstract class Banco {
    protected $saldo;
    protected $limite;
    protected $juros;

    // Protótipos das funções de instanciamento obrigatório
    abstract protected function sacar($valor);
    abstract protected function depositar($valor);

    // Métodos não obrigatórios, mas que podem ser herdados
    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
}

class Itau extends Banco {
    // Implementações obrigatórias
    public function sacar($valor) {
        $this->saldo -= $valor;
        echo "<hr> Sacou R$" . $valor;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
        echo "<hr> Depositou R$" . $valor;
    }
}

$conta00 = new Itau();
$conta00->setSaldo(1000);
echo "<hr> Saldo: R$" . $conta00->getSaldo();
$conta00->sacar(200);