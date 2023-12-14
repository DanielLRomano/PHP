<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero > 0) {
        echo "Valor Positivo";
    } elseif ($numero < 0) {
        echo "Valor Negativo";
    } else {
        echo "Igual a Zero";
    }
}
?>