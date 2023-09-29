<?php

// Verifique se foi enviado um arquivo de imagem
if (isset($_FILES["imagem"])) {
    $imagem = $_FILES["imagem"];

    // Verifique se não ocorreu um erro no upload
    if ($imagem["error"] == UPLOAD_ERR_OK) {
        // Nomeie a imagem com base no timestamp
        $nomeFinal = time() . '.jpg';
        
        // Mova a imagem para o destino desejado
        if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
            // Abra o arquivo e obtenha o tamanho
            $tamanhoImg = filesize($nomeFinal);

            // Abra a conexão com o banco de dados
            $host = "localhost";
            $username = "root";
            $password = "";
            $db = "test";
            $conn = new mysqli($host, $username, $password, $db);

            // Verifique a conexão com o banco de dados
            if ($conn->connect_error) {
                die("Impossível conectar ao banco de dados: " . $conn->connect_error);
            }

            // Prepare a consulta SQL para inserir a imagem
            $stmt = $conn->prepare("INSERT INTO PESSOA (PES_IMG) VALUES (?)");

            // Associe os parâmetros
            $stmt->bind_param("b", $mysqlImg);

            // Leitura do conteúdo da imagem
            $mysqlImg = file_get_contents($nomeFinal);

            // Execute a consulta
            if ($stmt->execute()) {
                // Exclua o arquivo temporário
                unlink($nomeFinal);

                // Redirecione para a página de exibição
                header("location: exibir.php");
            } else {
                echo "Erro ao executar a consulta: " . $stmt->error;
            }

            // Feche a conexão com o banco de dados
            $stmt->close();
            $conn->close();
        } else {
            echo "Falha ao mover o arquivo para o destino desejado.";
        }
    } else {
        echo "Ocorreu um erro no upload da imagem.";
    }
} else {
    echo "Você não realizou o upload de forma satisfatória.";
}

?>
