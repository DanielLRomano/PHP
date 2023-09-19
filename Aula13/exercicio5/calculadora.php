<?php
// Ler os dados do formulário
$quilometragem = $_POST['quilometragem'];
$consumo = $_POST['consumo'];
$preco_litro = $_POST['preco_litro'];

// Verificar se os dados são números positivos
if ($quilometragem && $consumo && $preco_litro && $quilometragem >= 0 && $consumo >= 0 && $preco_litro >= 0) {
    // Calcular o consumo médio em km/l
    $consumo_medio = $quilometragem / $consumo;

    // Calcular o custo por quilômetro
    $custo_por_quilometro = $preco_litro / $consumo_medio;

    echo "<p>Consumo médio: $consumo_medio km/l</p>";
    echo "<p>Custo por quilômetro: R$ $custo_por_quilometro</p>";
} else {
    echo "<p>Por favor, insira valores válidos (números não negativos).</p>";
}
?>