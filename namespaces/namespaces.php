<?php
// temos duas classes com o mesmo nome, uma na pasta class, outra na pasta model, para utilizarmos sem
// conflitos, vamos usar os namespaces dentro das classes

// Os namespaces são qualificadores que resolvem dois problemas diferentes:
//  1. Eles permitem uma melhor organização agrupando classes que trabalham juntas para realizar uma tarefa
//  2. Eles permitem que o mesmo nome seja usado para mais de uma classe

require 'class/produtoClass.php';
require 'model/produto.php';

// $produto = new Produto(); <- isso gera erro por que o código não sabe se estamos tentando instaciar a
// classe produto da pasta class ou model
$produto = new \produtoClass\Produto();
$produto->mostrarDetalhes();

echo "<br>";
// outro jeito de chamar um namespace:
use produtoModel\Produto;

$produto2 = new Produto();
$produto2->mostrarDetalhes();
echo "<br>";

// podemos também fazer utilizando apelidos para a classe
use produtoClass\Produto as productClass;

$produto3 = new productClass();
$produto3->mostrarDetalhes();