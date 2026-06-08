<?php

$resultado = "";
$classeResultado = "";

$idade = "";
$habilitacao = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $idade = intval($_POST["idade"]);
    $habilitacao = $_POST["habilitacao"] ?? "";

    if ($idade >= 18 && $habilitacao === "S") {
        $resultado = "🚗 Pode dirigir";
        $classeResultado = "success";
    } else {
        $resultado = "🚫 Não pode dirigir";
        $classeResultado = "danger";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 • Maioridade e Habilitação</title>

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
                    Exercício 02
                </span>

                <h1 class="exercise__title">
                    Maioridade e Habilitação
                </h1>

                <p class="exercise__description">
                    Informe a idade da pessoa e se ela possui habilitação para verificar se pode dirigir.
                </p>

            </div>

            <form method="POST" class="form">

                <div class="form__group">

                    <label for="idade" class="form__label">
                        Idade
                    </label>

                    <input
                        type="number"
                        name="idade"
                        id="idade"
                        class="form__input"
                        placeholder="Ex.: 18"
                        min="0"
                        value="<?= htmlspecialchars($idade) ?>"
                        required>

                </div>

                <div class="form__group">

                    <label for="habilitacao" class="form__label">
                        Possui habilitação?
                    </label>

                    <select
                        name="habilitacao"
                        id="habilitacao"
                        class="form__input"
                        required>

                        <option value="">
                            Selecione uma opção
                        </option>

                        <option
                            value="S"
                            <?= $habilitacao === "S" ? "selected" : "" ?>>
                            Sim
                        </option>

                        <option
                            value="N"
                            <?= $habilitacao === "N" ? "selected" : "" ?>>
                            Não
                        </option>

                    </select>

                </div>

                <button type="submit" class="form__button">
                    Verificar Situação
                </button>

            </form>

            <?php if (!empty($resultado)) : ?>

                <div class="result <?= $classeResultado ?>">

                    <span class="result__title">
                        Resultado
                    </span>

                    <p class="result__info">
                        Idade: <?= htmlspecialchars($idade) ?> anos
                    </p>

                    <p class="result__info">
                        Habilitação:
                        <?= $habilitacao === "S" ? "Sim" : "Não" ?>
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