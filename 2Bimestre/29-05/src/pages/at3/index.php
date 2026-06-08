<?php

$resultado = "";
$classeResultado = "";

$usuario = "";
$senha = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usuario = trim($_POST["usuario"]);
    $senha = trim($_POST["senha"]);

    if ($usuario === "admin" && $senha === "1234") {

        $resultado = "🔓 Acesso liberado";
        $classeResultado = "success";

    } elseif ($usuario === "admin" && $senha !== "1234") {

        $resultado = "⚠️ Senha incorreta";
        $classeResultado = "warning";

    } else {

        $resultado = "🚫 Acesso negado";
        $classeResultado = "danger";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 • Sistema de Acesso</title>

    <link rel="stylesheet" href="../../assets/style/global.css">
    <link rel="stylesheet" href="./index.css">
</head>

<body>

    <main class="exercise">

        <div class="exercise__container">

            <a href="../../../index.html" class="exercise__back">
                ← Voltar para o início
            </a>

            <div class="exercise__header">

                <span class="exercise__badge">
                    Exercício 03
                </span>

                <h1 class="exercise__title">
                    Sistema de Acesso
                </h1>

                <p class="exercise__description">
                    Informe o usuário e a senha para verificar se o acesso será liberado.
                </p>

            </div>

            <form method="POST" class="form">

                <div class="form__group">

                    <label for="usuario" class="form__label">
                        Usuário
                    </label>

                    <input
                        type="text"
                        name="usuario"
                        id="usuario"
                        class="form__input"
                        placeholder="Digite o usuário"
                        value="<?= htmlspecialchars($usuario) ?>"
                        required>

                </div>

                <div class="form__group">

                    <label for="senha" class="form__label">
                        Senha
                    </label>

                    <input
                        type="password"
                        name="senha"
                        id="senha"
                        class="form__input"
                        placeholder="Digite a senha"
                        required>

                </div>

                <button type="submit" class="form__button">
                    Entrar
                </button>

            </form>

            <?php if (!empty($resultado)) : ?>

                <div class="result <?= $classeResultado ?>">

                    <span class="result__title">
                        Resultado
                    </span>

                    <p class="result__info">
                        Usuário informado:
                        <strong><?= htmlspecialchars($usuario) ?></strong>
                    </p>

                    <strong class="result__message">
                        <?= $resultado ?>
                    </strong>

                </div>

            <?php endif; ?>

        </div>

    </main>

</body>

</html>