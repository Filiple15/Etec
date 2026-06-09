<?php

$resultado = "";
$classeResultado = "";

$saldo = "";
$saque = "";
$saldoRestante = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $saldo = floatval($_POST["saldo"]);
    $saque = floatval($_POST["saque"]);

    if ($saque <= $saldo) {

        $saldoRestante = $saldo - $saque;

        $resultado = "💸 Saque realizado com sucesso";
        $classeResultado = "success";

    } else {

        $resultado = "🚫 Saldo insuficiente";
        $classeResultado = "danger";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 • Caixa Eletrônico</title>

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
                    Exercício 05
                </span>

                <h1 class="exercise__title">
                    Caixa Eletrônico
                </h1>

                <p class="exercise__description">
                    Informe o saldo disponível e o valor desejado para realizar uma simulação de saque.
                </p>

            </div>

            <form method="POST" class="form">

                <div class="form__group">

                    <label for="saldo" class="form__label">
                        Saldo disponível (R$)
                    </label>

                    <input
                        type="number"
                        name="saldo"
                        id="saldo"
                        class="form__input"
                        placeholder="Ex.: 1500.00"
                        step="0.01"
                        min="0"
                        value="<?= htmlspecialchars($saldo) ?>"
                        required>

                </div>

                <div class="form__group">

                    <label for="saque" class="form__label">
                        Valor do saque (R$)
                    </label>

                    <input
                        type="number"
                        name="saque"
                        id="saque"
                        class="form__input"
                        placeholder="Ex.: 500.00"
                        step="0.01"
                        min="0"
                        value="<?= htmlspecialchars($saque) ?>"
                        required>

                </div>

                <button type="submit" class="form__button">
                    Realizar Saque
                </button>

            </form>

            <?php if (!empty($resultado)) : ?>

                <div class="result <?= $classeResultado ?>">

                    <span class="result__title">
                        Resultado
                    </span>

                    <p class="result__info">
                        Saldo informado:
                        <strong>
                            R$ <?= number_format($saldo, 2, ',', '.') ?>
                        </strong>
                    </p>

                    <p class="result__info">
                        Valor do saque:
                        <strong>
                            R$ <?= number_format($saque, 2, ',', '.') ?>
                        </strong>
                    </p>

                    <?php if ($classeResultado === "success") : ?>

                        <p class="result__info">
                            Saldo restante:
                            <strong>
                                R$ <?= number_format($saldoRestante, 2, ',', '.') ?>
                            </strong>
                        </p>

                    <?php endif; ?>

                    <strong class="result__message">
                        <?= $resultado ?>
                    </strong>

                </div>

            <?php endif; ?>

        </div>

    </main>

</body>

</html>