<?php
// Ler o número do mês do formulário
$numero_mes = $_POST['numero_mes'];

// Verificar se o valor é um número inteiro entre 1 e 12
if ($numero_mes && $numero_mes >= 1 && $numero_mes <= 12) {
    // Array com os nomes dos meses
    $meses = array(
        1 => 'Janeiro',
        2 => 'Fevereiro',
        3 => 'Março',
        4 => 'Abril',
        5 => 'Maio',
        6 => 'Junho',
        7 => 'Julho',
        8 => 'Agosto',
        9 => 'Setembro',
        10 => 'Outubro',
        11 => 'Novembro',
        12 => 'Dezembro'
    );

    // Obtém o nome do mês com base no número
    $nome_mes = $meses[$numero_mes];

    echo "<p>O número $numero_mes corresponde ao mês de $nome_mes.</p>";
} else {
    echo "<p>Não existe um mês com o número $numero_mes.</p>";
}
?>