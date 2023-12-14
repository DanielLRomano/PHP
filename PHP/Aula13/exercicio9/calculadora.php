<?php
// Função para verificar se um número é perfeito
function isPerfeito($numero)
{
    $somaFatores = 0;
    // Encontra os fatores do número e calcula a soma
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaFatores += $i;
        }
    }
    // Se a soma dos fatores for igual ao número, é perfeito
    return $somaFatores == $numero;
}

echo "<p>Números perfeitos até 1000:</p>";
echo "<ul>";

// Loop para encontrar e exibir números perfeitos até 1000
for ($i = 2; $i <= 1000; $i++) {
    if (isPerfeito($i)) {
        echo "<li>$i</li>"; // Exibe o número perfeito encontrado
    }
}

echo "</ul>";
?>