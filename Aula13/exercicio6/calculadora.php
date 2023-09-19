<?php
// Ler os valores dos lados do formulário
$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];
$lado3 = $_POST['lado3'];

// Verificar se os valores são números positivos
if ($lado1 && $lado2 && $lado3 && $lado1 >= 0 && $lado2 >= 0 && $lado3 >= 0) {
    // Verificar se a exceção ocorre
    if (
        ($lado1 >= $lado2 + $lado3) ||
        ($lado2 >= $lado1 + $lado3) ||
        ($lado3 >= $lado1 + $lado2)
    ) {
        echo "<p>Os valores não representam um triângulo válido.</p>";
    } else {
        // Verificar se o triângulo é equilátero, isósceles ou escaleno
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "<p>Os valores representam um triângulo equilátero.</p>";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "<p>Os valores representam um triângulo isósceles.</p>";
        } else {
            echo "<p>Os valores representam um triângulo escaleno.</p>";
        }
    }
} else {
    echo "<p>Por favor, insira valores válidos.</p>";
}
?>