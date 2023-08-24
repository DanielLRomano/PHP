<?php

//string.
$str = "Olá Mundo em php.";
var_dump($str);

echo "<br>";

if (is_string($str)) {
    echo "É uma variável String";
} else {
    echo "Não é uma variável String";
}
echo "<hr>";

//int
$numero = 4;
var_dump($numero);

echo "<br>";

if (is_int($numero)) {
    echo "É uma variável Inteira";
} else {
    echo "Não é uma variável Inteira";
}

echo "<hr>";

//ponto flutuante
$real = 2.75;
var_dump($real);

echo "<br>";

if (is_float($real)) {
    echo "É uma variável Float";
} else {
    echo "Não é uma variável Float";
}

echo "<hr>";

//booleano
$bool = true;
var_dump($bool);

echo "<br>";

if (is_bool($bool)) {
    echo "É uma variável Boolean";
} else {
    echo "Não é uma variável Boolean";
}

echo "<hr>";

//array
$frutas = array("Melância", "Uva", "Morango", 2, 10.5, 7);
var_dump($frutas);

echo "<br>";

if (is_array($frutas)) {
    echo "É uma variável Array";
} else {
    echo "Não é uma variável Array";
}

echo "<hr>";

//objeto
class Alunos
{
    public $nome;
    public function nomeAluno($nome)
    {
        $this->$nome = $nome;
    }
}
$aluno = new Alunos();
$aluno->nomeAluno("Matheus");
var_dump($aluno);

echo "<br>";

if (is_object($aluno)) {
    echo "É uma variável Objeto";
} else {
    echo "Não é uma variável Objeto";
}

echo "<hr>";

//null
$saldo = null;
var_dump($saldo);

echo "<br>";

if (is_null($saldo)) {
    echo "É uma variável Nula";
} else {
    echo "Não é uma variável Nula";
}

echo "<hr>";

//comando if

$a = 10;
$b = 50;

if ($a > $b) {
    echo "a é maior que b";
} elseif ($a == $b) {
    echo "a é igual a b";
} else {
    echo "a é menor que b";
}

echo "<hr>";

//Comando switch

$i = 3;

switch ($i) {
    case 0:
        echo "i é igual a 0";
        break;
    case 1:
        echo "i é igual a 1";
        break;
    case 2:
        echo "i é igual a 2";
        break;
    default:
        echo "i não é igual a 0,1 ou 2";
        break;
}

echo "<hr>";
?>