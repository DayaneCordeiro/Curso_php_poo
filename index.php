<?php

class Login {
    // Atributos
    private $email;
    private $senha;
    private $nome;

    // Construtor
    public function __construct($email, $senha, $nome) {
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
    }

    // Getters and Setters
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        // FILTER_VAR
        // Filtra a variável com um especificado filtro.
        // Retorna o dado filtrado, ou false se o filtro falhar.

        // Funções
        // FILTER_VALIDATE_EMAIL	Validação de e-mails de acordo com o padrão RFC 822.
        // FILTER_VALIDATE_INT	Validação de inteiros. Caso seja passada uma string contendo um inteiro, o valor será convertido e validado.
        // FILTER_VALIDATE_IP	Validação de formato IP. Funciona tanto com IPv4 quanto IPv6.
        // FILTER_VALIDATE_MAC	Validação de MAC address, endereço físico de placas de rede.
        // FILTER_VALIDATE_URL	 Validação de URLs de acordo com o padrão RFC 2396.
        // FILTER_SANITIZE_EMAIL	Remove todos os caracteres, exceto letras, números e os caracteres !#$%&’*+-=?^_`{|}~@.[].
        // FILTER_SANITIZE_NUMBER_FLOAT	Remove todos os caracteres, exceto números, +- e, opcionalmente, .,eE.
        // FILTER_SANITIZE_NUMBER_INT	Remove todos os caracteres, exceto números e sinais de positivo e negativo.
        // FILTER_SANITIZE_SPECIAL_CHARS	Escapa em formato de entidades HTML os caracteres ‘””<>& e todos os caracteres que possuam valor ASCII menor que 32. Opcionalmente é possível retirar ou converter outros caracteres especiais.
        // FILTER_SANITIZE_STRING	Retira tags. Opcionalmente é possível retirar ou converter outros caracteres especiais.
        // FILTER_SANITIZE_URL	Remove todos os caracteres, exceto letras, números e $-_.+!*'(),{}|\^~[]`<>#%””;/?:@&=.

        $finalEmail = filter_var($email, FILTER_SANITIZE_EMAIL); // Vai remover qualquer caractere que seja
                                                                 // em emails
        $this->email = $finalEmail;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Métodos
    public function logar() {
        if ($this->email == "teste@teste.com" && $this->senha == "123456")
            echo "Logado com sucesso!";
        else
            echo "Dados inválidos";
    }
}

$logar = new Login("teste@t((este.com", "123456", "Dayane Cordeiro");
echo $logar->getEmail();

$logar->logar();