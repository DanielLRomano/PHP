<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo "Tabuada do $numero:<br>";

    for ($i = 0; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero X $i = $resultado<br>";
    }
}
?>