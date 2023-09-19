<?php
// Ler os números do formulário
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

// Verificar se ambos os números são números inteiros positivos
if ($numero1 && $numero2 && $numero1 >= 0 && $numero2 >= 0) {
    // Inicialize o resultado como zero
    $resultado = 0;

    // Realize a multiplicação por somas 
    for ($i = 0; $i < $numero2; $i++) {
        $resultado += $numero1;
    }

    echo "<p>$numero1 x $numero2 = $resultado</p>";
} else {
    echo "<p>Por favor, insira dois números inteiros positivos.</p>";
}

?>