<?php

// Recebendo dados
$origem = $_GET['origem'];
$destino = $_GET['destino'];
$distancia = $_GET['distancia'];
$passageiros = $_GET['passageiros'];
$consumo = $_GET['consumo'];
$preco_combustivel = $_GET['preco'];
$margem = $_GET['margem'];

// Validação básica
if ($passageiros <= 0 || $passageiros > 12) {
    echo "<h2>Erro: número de passageiros inválido</h2>";
    exit;
}

// Cálculos
$lugares = 12 - $passageiros;
$litros = $distancia / $consumo;
$custo = $litros * $preco_combustivel;
$valor_total = $custo + ($custo * $margem / 100);
$preco_passagem = $valor_total / $passageiros;

$faturamento_max = $preco_passagem * 12;
$faturamento_real = $preco_passagem * $passageiros;
$diferenca = $faturamento_max - $faturamento_real;

// Viabilidade
$viavel = $faturamento_real >= $valor_total;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<link rel="stylesheet" href="../CSS/stylePHP.css">
</head>
<body>

<h1>Resultado da Viagem</h1>

<div class="container">

    <!-- Card Viagem -->
    <div class="card">
        <h2>📍 Viagem</h2>
        <p><strong>Origem:</strong> <?= $origem ?></p>
        <p><strong>Destino:</strong> <?= $destino ?></p>
        <p><strong>Distância:</strong> <?= $distancia ?> km</p>
    </div>

    <!-- Card Passageiros -->
    <div class="card">
        <h2>👥 Passageiros</h2>
        <p><strong>Quantidade:</strong> <?= $passageiros ?></p>
        <p><strong>Lugares livres:</strong> <?= $lugares ?></p>
    </div>

    <!-- Card Consumo -->
    <div class="card">
        <h2>⛽ Consumo</h2>
        <p><strong>Litros necessários:</strong> <?= number_format($litros, 2) ?></p>
    </div>

    <!-- Card Custos -->
    <div class="card">
        <h2>💰 Custos</h2>
        <p><strong>Custo da viagem:</strong> R$ <?= number_format($custo, 2, ',', '.') ?></p>
        <p><strong>Preço por passageiro:</strong> R$ <?= number_format($preco_passagem, 2, ',', '.') ?></p>
    </div>

    <!-- Card Faturamento -->
    <div class="card">
        <h2>📊 Faturamento</h2>
        <p><strong>Máximo:</strong> R$ <?= number_format($faturamento_max, 2, ',', '.') ?></p>
        <p><strong>Real:</strong> R$ <?= number_format($faturamento_real, 2, ',', '.') ?></p>
        <p><strong>Diferença:</strong> R$ <?= number_format($diferenca, 2, ',', '.') ?></p>
    </div>

    <!-- Card Status -->
    <div class="card status">
        <h2>Status</h2>
        <p>
            <?= $viavel 
                ? "✅ Viagem viável" 
                : "❌ Viagem não viável"; 
            ?>
        </p>
    </div>

</div>

</body>
</html>