<?php
function nPrimo($numero) {
    $cont = null;

    if ($numero <= 1) {
        echo "O número $numero não é primo.";
        return;
    }

    for ($i = 2; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $cont++;
        }
    }

    if ($cont == 0) {
        echo "O número $numero é primo.";
    } else {
        echo "O número $numero não é primo e tem $cont divisores";
    }
}
nPrimo(19);

