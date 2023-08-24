<?php

function tabuada($numero){
    for ($i=0; $i <= 10 ; $i++) { 
        $resultado = $numero * $i;
        echo "$numero * $i = $resultado <br>";
    }
}

echo tabuada(2);