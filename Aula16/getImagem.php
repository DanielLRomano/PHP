<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "test";
$PicNum = $_GET["PicNum"];

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

// Execute a consulta SQL usando mysqli_query com uma consulta preparada
$query = "SELECT PES_IMG FROM PESSOA WHERE PES_ID=?";
$stmt = mysqli_prepare($conn, $query);

if (!$stmt) {
    die("Impossível preparar a consulta: " . mysqli_error($conn));
}

// Associe o parâmetro PicNum à consulta preparada
mysqli_stmt_bind_param($stmt, "i", $PicNum);

// Execute a consulta
if (mysqli_stmt_execute($stmt)) {
    // Associe o resultado a uma variável
    mysqli_stmt_bind_result($stmt, $PES_IMG);

    // Busque o resultado
    if (mysqli_stmt_fetch($stmt)) {
        // Defina o tipo de conteúdo para imagem
        header("Content-type: image/gif");

        // Imprima a imagem
        echo $PES_IMG;
    } else {
        echo "Imagem não encontrada.";
    }
} else {
    echo "Impossível executar a consulta: " . mysqli_error($conn);
}

// Feche a consulta preparada e a conexão com o banco de dados
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>
