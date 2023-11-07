<?php

$farenheit = $_POST['farenheit'];
$celsius = $_POST['celsius'];

function celsius(){
    $farenheit = $_POST['farenheit'];
    if ($farenheit != 0) {
        echo "Temperatura em Celsius: " . ($farenheit - 32) * (5 / 9) . "<br>";
    } else {
        echo "Temperatura em Celsius está em -17,7778 <br>";
    }
}

function farenheit(){
    $celsius = $_POST['celsius'];
    if ($celsius != 0) {
        echo "Temperatura em Farenheit: " . $celsius * (9 / 5) + 32 . "<br>";
    } else {
        echo "Temperatura em Farenheit está em 32 <br>";
    }
}

    echo celsius();
    echo farenheit();

?>