<?php
// Função para verificar se um número é primo
function isPrimo($numero)
{
    // Números menores ou iguais a 1 não são primos
    if ($numero <= 1) {
        return false;
    }

    // Verifica se o número é divisível por algum número entre 2 e a raiz quadrada do próprio número
    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            return false; // Se for divisível, não é primo
        }
    }

    return true; // Se não for divisível por nenhum número além de 1 e ele mesmo, é primo
}

echo "<p>Números primos até 1000:</p>";
echo "<ul>";

// Loop para encontrar e exibir números primos até 1000
for ($i = 2; $i <= 1000; $i++) {
    if (isPrimo($i)) {
        echo "<li>$i</li>"; // Exibe o número primo encontrado
    }
}

echo "</ul>";
?>