<?php
$valor = $_POST['valor'];

// Calcula 5% e 50% do valor inserido
$cincoPorcento = 0.05 * $valor;
$cinquentaPorcento = 0.5 * $valor;

echo "<p>Valor inserido: $valor</p>";
echo "<p>5% do valor: $cincoPorcento</p>";
echo "<p>50% do valor: $cinquentaPorcento</p>";

?>