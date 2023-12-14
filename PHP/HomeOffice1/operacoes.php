<?php
include 'matematica.php';
$a = 4;
$b = 5;

echo "Numeros: $a e $b <br>";
echo "Soma: " . soma($a, $b) . "<br>";
echo "Subtração: " . subtracao($a, $b) . "<br>";
echo "Multiplicação: " . multiplicacao($a, $b) . "<br>";
echo "Divisão: " . divisao($a, $b) . "<br>";
echo "Ao quadrado 1º Numero: " . quadrado($a) . "<br>";
echo "Ao quadrado 2º Numero: " . quadrado($b) . "<br>";
echo "Potência: " . potencia($a,$b) . "<br>";

?>