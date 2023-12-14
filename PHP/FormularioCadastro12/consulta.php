<?php
// Estabeleça a conexão com o banco de dados
$conexao = mysqli_connect('localhost', 'root', '', 'clientes');

// Verifique a conexão
if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

// Defina o conjunto de caracteres
mysqli_set_charset($conexao, 'utf8');

// Execute a consulta SQL
$sql = mysqli_query($conexao, "SELECT * FROM clientes") or die("Erro na consulta");

// Verifique se a consulta foi bem-sucedida
if ($sql) {
    while ($dados = mysqli_fetch_assoc($sql)) {
        echo $dados['id'] . ' ';
        echo $dados['nome'] . '<br>';
    }
} else {
    die("Erro na consulta ao banco de dados: " . mysqli_error($conexao));
}

// Feche a conexão com o banco de dados
mysqli_close($conexao);
?>
