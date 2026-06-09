<?php
session_start();

include_once("conexao.php");

// recebendo dados
$nome = trim($_POST['nome']);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = trim($_POST['senha']);
$confirmarSenha = trim($_POST['confirmar_senha']);
$telefone = trim($_POST['telefone']);

// ----------------------
// VALIDAR CAMPOS VAZIOS
// ----------------------
if (
    empty($nome) ||
    empty($email) ||
    empty($senha) ||
    empty($confirmarSenha)
) {
    $_SESSION['msg'] = "Preencha todos os campos obrigatórios!";
    header("Location: ../pages/form/cadastro.php");
    exit();
}

// ----------------------
// VALIDAR EMAIL
// ----------------------
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['msg'] = "Email inválido!";
    header("Location: ../pages/form/cadastro.php");
    exit();
}

// ----------------------
// VALIDAR SENHAS
// ----------------------
if ($senha !== $confirmarSenha) {
    $_SESSION['msg'] = "As senhas não coincidem!";
    header("Location: ../pages/form/cadastro.php");
    exit();
}

// ----------------------
// VERIFICAR EMAIL EXISTENTE
// ----------------------
$sqlCheck = "SELECT id FROM usuarios WHERE email = ? LIMIT 1";

$stmtCheck = mysqli_prepare($conn, $sqlCheck);
mysqli_stmt_bind_param($stmtCheck, "s", $email);
mysqli_stmt_execute($stmtCheck);

$resultCheck = mysqli_stmt_get_result($stmtCheck);

if (mysqli_num_rows($resultCheck) > 0) {
    $_SESSION['msg'] = "Este email já está cadastrado!";
    header("Location: ../pages/form/cadastro.php");
    exit();
}

// ----------------------
// CRIPTOGRAFAR SENHA
// ----------------------
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// ----------------------
// INSERIR NO BANCO
// ----------------------
$senha = "INSERT INTO usuarios 
(nome, email, senha, telefone) 
VALUES (?, ?, ?, ?)";

$stmtInsert = mysqli_prepare($conn, $sqlInsert);

mysqli_stmt_bind_param(
    $stmtInsert,
    "ssss",
    $nome,
    $email,
    $senhaHash,
    $telefone
);

if (mysqli_stmt_execute($stmtInsert)) {
    
    $_SESSION['msg'] = "Cadastro realizado com sucesso!";
    
    header("Location: ../index.php");
    exit();

} else {

    $_SESSION['msg'] = "Erro ao cadastrar usuário.";
    
    header("Location: ../pages/form/cadastro.php");
    exit();
}
?>