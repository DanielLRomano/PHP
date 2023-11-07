<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero % 2 == 0) {
        echo "$numero é um número par.";
    } else {
        echo "$numero é um número ímpar.";
    }
}
?>