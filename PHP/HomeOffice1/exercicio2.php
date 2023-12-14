<?php


function fatorial($n){;
    if ($n != 0) {
        $resultado = $n * fatorial($n - 1);
    } else {
        $resultado = 1;
    }
    return $resultado;
}

echo fatorial(3);