<?php
// Ler o número do formulário
$numero = $_POST['numero'];

// Verificar se o número é um número inteiro não negativo
if ($numero && $numero >= 0) {
    // Inicialize o resultado como 1
    $resultado = 1;

    // Calcular o fatorial
    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    echo "<p>$numero! = $resultado</p>";
} else {
    echo "<p>Por favor, insira um número inteiro não negativo.</p>";
}
?>