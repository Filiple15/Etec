<?php
$resultado = "";
$classeResultado = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nota = floatval($_POST["nota"]);

    if ($nota >= 7) {
        $resultado = "✅ Aprovado";
        $classeResultado = "success";
    } elseif ($nota >= 5) {
        $resultado = "⚠️ Recuperação";
        $classeResultado = "warning";
    } else {
        $resultado = "❌ Reprovado";
        $classeResultado = "danger";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 • Aprovação com Recuperação</title>

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
                    Exercício 01
                </span>

                <h1 class="exercise__title">
                    Aprovação com Recuperação
                </h1>

                <p class="exercise__description">
                    Informe a nota do aluno para verificar sua situação acadêmica.
                </p>
            </div>

            <form method="POST" class="form">

                <div class="form__group">

                    <label for="nota" class="form__label">
                        Nota do aluno
                    </label>

                    <input
                        type="number"
                        name="nota"
                        id="nota"
                        class="form__input"
                        placeholder="Ex.: 8.5"
                        step="0.1"
                        min="0"
                        max="10"
                        required>

                </div>

                <button type="submit" class="form__button">
                    Verificar Resultado
                </button>

            </form>

            <?php if (!empty($resultado)) : ?>

                <div class="result <?= $classeResultado ?>">

                    <span class="result__title">
                        Resultado
                    </span>

                    <strong class="result__message">
                        <?= $resultado ?>
                    </strong>

                </div>

            <?php endif; ?>

        </div>

    </main>

</body>
</html>

