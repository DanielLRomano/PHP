<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Envio de arquivos</title>
</head>
<body>
    <div class="container">
        <h2>Aula 16</h2>
        <form action="gravar.php" method="POST" enctype="multipart/form-data">
		<label for="imagem">Fazer upload de imagens:</label>
		<br>
		<input type="file" name="imagem"/>
		<br/>
		<input type="submit" value="Enviar"/>
	</form>
    </div>
</body>
</html>