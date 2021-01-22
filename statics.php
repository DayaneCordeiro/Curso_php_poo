<?php

class Login {
    // pode incluir um atributo ou método não estático nessa classe, porém será necessário instanciá-la para
    // utilizar esses recursos fora dela
    public static $user;

    public static function verificaLogin() {
        // o this não funciona com membros estáticos, apenas o self, mas esse tem o '$' pois não pe constante
        echo "O usuário " . self::$user . " está logado!";
    }
}

// Como o método é estático, não precisa instanciar a classe com $login = new Login, basta fazer assim:
Login::$user = "admin";
Login::verificaLogin();