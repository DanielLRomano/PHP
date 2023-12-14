<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $fatorial = 1;

    if ($numero >= 0) {
        for ($i = $numero; $i > 0; $i--) {
            $fatorial *= $i;
        }
        echo "O fatorial de $numero é $fatorial.";
    } else {
        echo "O fatorial de um número negativo não é definido.";
    }
}
?>