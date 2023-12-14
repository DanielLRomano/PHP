<?php
// Inicia a sessão para manipulação de variáveis de sessão
session_start();

// Verifica se a sessão está vazia, indicando que o usuário não está autenticado
if (empty($_SESSION)) {
    // Redireciona para a página de login com mensagem de erro
    header("Location: index.php?msgErro=Você precisa se autenticar no sistema.");
} else {
    // Destroi a sessão, efetuando logout do usuário
    session_destroy();
    
    // Redireciona para a página de login com mensagem de sucesso
    header("Location: login.php?msgSucesso=Logout efetuado com sucesso!");
}

// Encerra o script para evitar execução de código adicional
die();
?>
