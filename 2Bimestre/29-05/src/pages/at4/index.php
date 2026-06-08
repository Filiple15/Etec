<?php

$resultado = "";
$classeResultado = "";

$temperatura = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $temperatura = floatval($_POST["temperatura"]);

    if ($temperatura < 15) {

        $resultado = "🥶 Frio";
        $classeResultado = "info";

    } elseif ($temperatura < 25) {

        $resultado = "😊 Agradável";
        $classeResultado = "success";

    } else {

        $resultado = "☀️ Quente";
        $classeResultado = "warning";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 • Classificação de Temperatura</title>

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
                    Exercício 04
                </span>

                <h1 class="exercise__title">
                    Classificação de Temperatura
                </h1>

                <p class="exercise__description">
                    Informe uma temperatura para descobrir se o clima está frio, agradável ou quente.
                </p>

            </div>

            <form method="POST" class="form">

                <div class="form__group">

                    <label for="temperatura" class="form__label">
                        Temperatura (°C)
                    </label>

                    <input
                        type="number"
                        name="temperatura"
                        id="temperatura"
                        class="form__input"
                        placeholder="Ex.: 22"
                        step="0.1"
                        value="<?= htmlspecialchars($temperatura) ?>"
                        required>

                </div>

                <button type="submit" class="form__button">
                    Classificar Temperatura
                </button>

            </form>

            <?php if (!empty($resultado)) : ?>

                <div class="result <?= $classeResultado ?>">

                    <span class="result__title">
                        Resultado
                    </span>

                    <p class="result__info">
                        Temperatura informada:
                        <strong><?= htmlspecialchars($temperatura) ?>°C</strong>
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