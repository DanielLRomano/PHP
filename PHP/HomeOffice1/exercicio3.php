<?php

function par($array){
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            echo $numero . " é par <br>";
        } else {
            echo $numero . " não é par <br>";
        }
    }
}

$numeros = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
echo par($numeros);