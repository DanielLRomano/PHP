<?php

function media($a, $b, $c, $d){
    $media = ($a + $b + $c + $d) / 4;

    if ($media >= 7) {
        echo "Aprovado";
    } else if ($media >= 5 && $media < 7) {
        echo "Exame";
    } else {
        echo "Reprovado";
    }
}

echo media(10, 8, 9, 5);