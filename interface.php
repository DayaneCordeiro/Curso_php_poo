<?php

// Uma interface serve para definir o modelo a ser usado por outras classes.

interface Crud {
    public function create();
    public function read();
    public function delete();
    public function update();
}

class Noticia implements Crud {
    // todas as funções da interface são de implementação obrigatória
    public function create() {
        // logica de criação
    }

    public function read() {
        // logica de leitura
    }

    public function delete() {
        // logica de deleção
    }

    public function update() {
        // logica de atualização
    }
}