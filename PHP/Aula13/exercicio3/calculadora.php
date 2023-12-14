<?php
// Ler os números do formulário
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

// Verificar se ambos os números são números inteiros positivos
if ($numero1 && $numero2 && $numero1 >= 0 && $numero2 >= 0) {
    // Verificar se o segundo número é zero (evitar divisão por zero)
    if ($numero2 == 0) {
        echo "<p>Erro: Divisão por zero não é permitida.</p>";
    } else {
        // Encontrar o maior e o menor número
        $maior = max($numero1, $numero2);
        $menor = min($numero1, $numero2);

        // Inicialize o resultado como zero
        $resultado = 0;

        // Realize a divisão do maior pelo menor
        while ($maior >= $menor) {
            $maior -= $menor;
            $resultado++;
        }

        echo "<p>$numero1 / $numero2 = $resultado</p>";
    }
} else {
    echo "<p>Por favor, insira dois números inteiros positivos.</p>";
}
?>