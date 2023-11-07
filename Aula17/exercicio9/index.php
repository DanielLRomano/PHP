<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    echo "$nome ";
    if ($idade >= 18) {
        echo "é maior de 18 e tem $idade anos.";
    } else {
        echo "não é maior de 18 e tem $idade anos.";
    }
}
?>