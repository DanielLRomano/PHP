<?php

function soma($a, $b){
    return ($a + $b);
}

function subtracao($a, $b){
    return ($a - $b);
}

function multiplicacao($a, $b){
    return ($a * $b);
}

function divisao($a, $b){
    if ($a == 0 || $b == 0) {
        echo "Não pode ser feito divisão por 0";
    } else {
        return ($a / $b);
    }
}

function quadrado($a){
    return $a * $a;
}

function quadrado2($b){
    return $b * $b;
}

function potencia($a,$b){
    return $a ** $b;
}

?>