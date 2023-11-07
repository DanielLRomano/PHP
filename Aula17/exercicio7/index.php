<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];

    if ($valorA > $valorB) {
        echo "A maior que B";
    } elseif ($valorA < $valorB) {
        echo "A menor que B";
    } else {
        echo "A é igual a B";
    }
}
?>