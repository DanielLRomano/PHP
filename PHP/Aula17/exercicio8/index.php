<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $notas = array(
        $_POST["nota1"],
        $_POST["nota2"],
        $_POST["nota3"]
    );

    $media = array_sum($notas) / count($notas);

    echo "Notas: N1 = {$notas[0]}, N2 = {$notas[1]}, N3 = {$notas[2]}<br>";
    echo "Média Geral: " . number_format($media, 2) . "<br>";

    if ($media >= 6) {
        echo "Aprovado";
    } else {
        echo "Reprovado";
    }
}
?>