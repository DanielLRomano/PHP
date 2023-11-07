<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];

    if ($valorA < $valorB) {
        echo "$valorA $valorB";
    } else {
        echo "$valorB $valorA";
    }
}
?>