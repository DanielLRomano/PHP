<?php
// Função para calcular a quantidade de tinta necessária
function calcularTinta($area)
{
    // Considerando que 1 litro de tinta cobre 3 metros quadrados e aplicando uma folga de 10%
    $quantidade_tinta = ($area * 1.1) / 3;
    return ceil($quantidade_tinta); // Arredonda para cima
}

// Função para calcular o preço de acordo com o tipo de tinta
function calcularPreco($quantidade_tinta, $tipo)
{
    $preco_lata = 80; // Preço da lata de 18 litros
    $preco_galao = 25; // Preço do galão de 3,6 litros
    $litros_por_lata = 18;
    $litros_por_galao = 3.6;

    if ($tipo == 'latas') {
        // Calcular quantas latas são necessárias
        $latas_necessarias = ceil($quantidade_tinta / $litros_por_lata);
        $preco_total = $latas_necessarias * $preco_lata;
    } elseif ($tipo == 'galoes') {
        // Calcular quantos galões são necessários
        $galoes_necessarios = ceil($quantidade_tinta / $litros_por_galao);
        $preco_total = $galoes_necessarios * $preco_galao;
    } elseif ($tipo == 'mix') {
        // Calcular a combinação mais econômica de latas e galões
        $latas_necessarias = floor($quantidade_tinta / $litros_por_lata);
        $restante = fmod($quantidade_tinta, $litros_por_lata);
        $galoes_necessarios = ceil($restante / $litros_por_galao);
        $preco_total = ($latas_necessarias * $preco_lata) + ($galoes_necessarios * $preco_galao);
    }

    return $preco_total;
}

// Verificar se o formulário foi enviado
// Obter o tamanho da área a partir do formulário
$area_a_pintar = $_POST['area'];

// Calcular a quantidade de tinta necessária
$quantidade_tinta = calcularTinta($area_a_pintar);

// Calcular preços nas três situações
$preco_latas = calcularPreco($quantidade_tinta, 'latas');
$preco_galoes = calcularPreco($quantidade_tinta, 'galoes');
$preco_mix = calcularPreco($quantidade_tinta, 'mix');

// Exibir os resultados
echo "Quantidade de tinta necessária: $quantidade_tinta litros<br>";
echo "Preço ao comprar apenas latas de 18 litros: R$ $preco_latas<br>";
echo "Preço ao comprar apenas galões de 3,6 litros: R$ $preco_galoes<br>";
echo "Preço ao misturar latas e galões: R$ $preco_mix<br>";
?>