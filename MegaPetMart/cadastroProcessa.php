<?php
// Inclusão do arquivo de conexão com o banco de dados
include 'db.php';

// Verificação se o formulário foi submetido e se os campos estão preenchidos
if (isset($_POST) && !empty($_POST)) {
    // Atribuição dos valores do formulário a variáveis
    $pNome = $_POST["pNome"];
    $sNome = $_POST["sNome"];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    // Hash da senha para armazenamento seguro no banco de dados
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $cpf = $_POST["cpf"];
    $nCartao = $_POST["nCartao"];
    $tipo = $_POST["tipo"];

    // Preparação da declaração SQL para a inserção dos dados no banco
    $stmt = $conn->prepare("INSERT INTO usuarios (pNome, sNome, usuario, email, senha, cidade, estado, cep, cpf, nCartao, tipo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    // Vinculação dos parâmetros à declaração SQL
    $stmt->bind_param("sssssssssss", $pNome, $sNome, $usuario, $email, $senha, $cidade, $estado, $cep, $cpf, $nCartao, $tipo);

    // Verificação se o usuário já existe
    if ($_POST["usuario"] == $usuario) {
        header("location:cadastro.php?msgErro=Usuario já cadastrado!");
    }

    // Execução da declaração SQL e redirecionamento com mensagem de sucesso ou falha
    if ($stmt->execute()) {
        header("location:cadastro.php?msgSucesso=Cadastro realizado com sucesso!");
    } else {
        header("Location: cadastro.php?msgErro=Falha ao cadastrar...");
    }

} else {
    // Redirecionamento em caso de falha no envio do formulário
    header("Location: cadastro.php?msgErro=Falha ao cadastrar Usuario...");
}

// Finalização do script
die();
?>