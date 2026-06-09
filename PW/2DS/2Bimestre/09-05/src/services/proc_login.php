<?php
session_start();
require_once("conexao.php");

// Captura dados do formulário
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = $_POST['senha'];

// Verifica campos vazios
if (empty($email) || empty($senha)) {
    $_SESSION['msg'] = "Preencha todos os campos!";
    header("Location: ../../index.php");
    exit();
}

// Busca usuário pelo email
$sql = "SELECT codigo, nome, email, senha FROM usuarios WHERE email = ? LIMIT 1";

$stmt = mysqli_prepare($conn, $sql);

// Verifica erro na query
if (!$stmt) {
    die("Erro na query: " . mysqli_error($conn));
}

// Associa email
mysqli_stmt_bind_param($stmt, "s", $email);

// Executa query
mysqli_stmt_execute($stmt);

// Resultado
$result = mysqli_stmt_get_result($stmt);

// Verifica usuário
if ($usuario = mysqli_fetch_assoc($result)) {

    // Comparação direta da senha
    if ($senha == $usuario['senha']) {

        $_SESSION['usuario_codigo'] = $usuario['codigo'];
        $_SESSION['usuario_nome'] = $usuario['nome'];

        header("Location: ../pages/home/principal.php");
        exit();

    } else {
        $_SESSION['msg'] = "Senha incorreta!";
        header("Location: ../../index.php");
        exit();
    }

} else {
    $_SESSION['msg'] = "Usuário não encontrado!";
    header("Location: ../../index.php");
    exit();
}
?>