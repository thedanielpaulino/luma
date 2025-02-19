<?php
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Credenciais fixas
    if ($user === "Luma" && $pass === "1234") {
        $_SESSION["loggedin"] = true;
        header("Location: pagina.html"); // Redireciona para a página protegida
        exit;
    } else {
        // Redireciona de volta ao login com erro
        header("Location: login.html?erro=1");
        exit;
    }
}
?>
