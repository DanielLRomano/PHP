<?php
// Configurações de conexão ao banco de dados
$host = "localhost";
$username = "root";
$password = "";
$DB = "loja";

// Conecta ao banco de dados
$conn = mysqli_connect($host, $username, $password) or die("Impossível conectar ao banco de dados.");
@mysqli_select_db($conn, $DB) or die("Impossível conectar ao banco de dados");

// Consulta SQL para obter todos os registros da tabela 'pedidos'
$query = "SELECT * FROM pedidos";
$result = mysqli_query($conn, $query) or die("Impossível executar a query");

// Array para armazenar os pedidos organizados por número de pedido
$pedidos = array();

// Loop para processar os resultados da consulta
while ($row = mysqli_fetch_assoc($result)) {
    $numPedido = $row['numPedido'];

    // Verifica se o número do pedido já existe no array de pedidos
    if (!array_key_exists($numPedido, $pedidos)) {
        // Se não existe, cria uma entrada no array para o número do pedido
        $pedidos[$numPedido] = array(
            'info' => $row, // Informações gerais do pedido
            'itens' => array(), // Array para armazenar itens específicos do pedido
            'total' => 0 // Total do pedido (inicializado como zero)
        );
    }

    // Adiciona o item atual ao array de itens do pedido
    $pedidos[$numPedido]['itens'][] = $row;

    // Atualiza o total do pedido somando o valor do item atual
    $pedidos[$numPedido]['total'] += $row['valor'];
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
