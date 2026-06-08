<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINKS DO CSS -->
    <link rel="stylesheet" href="./src/assets/styles/style.css"> <!-- Variavel Global CSS -->
    <link rel="stylesheet" href="./src/assets/styles/index.css"> <!-- CSS da pagina do index/login -->
    <!-- LOCAL DO FAVICON -->
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <title>Acesso ao Sistema</title>
</head>
<body>

    <form action="./src/services/proc_login.php" method="POST" class="container-login">

        <!-- lado esquerdo -->
        <div class="left-side">
            <img src="./src/assets/img/login-cadastro.png" alt="Student Illustration">
        </div>

        <!-- lado direito -->
        <div class="right-side">

            <div class="formulario">

                <h2>Student Login</h2>
                <p>Entre com suas informações para acessar sua conta</p>

                <div class="input-group">
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Digite seu email"
                        required
                    >
                </div>

                <div class="input-group">
                    <input 
                        type="password" 
                        name="senha" 
                        placeholder="Digite sua senha"
                        required
                    >
                </div>

                <button type="submit">
                    Login
                </button>

                <p class="cadastro-link">
                    Não possui conta?
                    <a href="./src/pages/form/cadastro.php">Criar cadastro</a>
                </p>

            </div>

        </div>

    </form>

</body>
</html>