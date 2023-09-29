<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "test";

// Use a função mysqli_connect para criar uma conexão
$conn = mysqli_connect($host, $username, $password, $db);

// Verifique se a conexão foi bem-sucedida
if (!$conn) {
    die("Impossível conectar ao banco de dados: " . mysqli_connect_error());
}

// Use mysqli_select_db para selecionar o banco de dados
if (!mysqli_select_db($conn, $db)) {
    die("Impossível selecionar o banco de dados: " . mysqli_error($conn));
}

// Execute a consulta SQL usando mysqli_query
$query = "SELECT * FROM PESSOA";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Impossível executar a query: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_object($result)) {
    // Use uma tag <img> para exibir a imagem
    echo "<img src='getImagem.php?PicNum=$row->PES_ID' alt='Imagem do Usuário'>";
}

// Feche a conexão com o banco de dados
mysqli_close($conn);

?>
