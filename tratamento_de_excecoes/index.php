<?php

// Ocorrência anormal que afeta o funcionamento da aplicação
// Exception é a classe base para todas as Exceptions
// message, code, file, line

class Newsletter {
    public function cadastrarEmail($email) {
        // verifica se o email é válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // lançando exceção para informar que o email é inválido
            throw new Exception("Este email é inválido", 1);
        }
        else
            echo "Email cadastrado com sucesso!";
    }
}

$newsletter = new Newsletter();

// A execção é lançada dentro da função, mas ela precisa ser tratada com o try catch
try {
    // tenta executar este código
    $newsletter->cadastrarEmail("contato@");
} catch (Exception $e) {
    // caso não consiga executar capturamos as exceções que chegaram e fazemos o que for adequado com elas
    echo "Mensagem: " . $e->getMessage(); // mostra apenas o texto da exceção
    echo "<br>Código: " . $e->getCode(); // aquele número que está no lançamento da exceção
    echo "<br>File: " . $e->getFile(); // mostra o caminho do arquivo onde a exceção foi lançada
    echo "<br>Line: " . $e->getLine(); // mostra em qual linha a exceção que foi lançada está (no código)
}
