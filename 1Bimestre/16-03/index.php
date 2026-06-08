<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viagem</title>

    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>

<h2>Sistema de Viagem</h2>
<div class="formulario">
    <form method="post" >
        Origem: <input type="text" name="origem" required><br><br>
        Destino: <input type="text" name="destino" required><br><br>

        Distância (km): <input type="number" name="distancia" required><br><br>
        Preço do combustível (R$): <input type="number" step="0.01" name="combustivel" required><br><br>
        Consumo (km/l): <input type="number" step="0.1" name="consumo" required><br><br>

        Passageiros: <input type="number" name="passageiros" required><br><br>
        Margem de lucro (%): <input type="number" name="lucro" required><br><br>

        <button type="submit">Calcular</button>
    </form>
</div>


<hr>

<?php
if ($_POST) {

    $capacidade = 12;

    $origem = $_POST['origem'];
    $destino = $_POST['destino'];
    $distancia = $_POST['distancia'];
    $precoCombustivel = $_POST['combustivel'];
    $kmPorLitro = $_POST['consumo'];
    $passageiros = $_POST['passageiros'];
    $margemLucro = $_POST['lucro'] / 100;

    // Validação básica
    if ($passageiros > $capacidade) {
        echo "<h3>Erro: Capacidade máxima é 12 passageiros.</h3>";
        exit;
    }

    // Cálculos
    $lugaresVazios = $capacidade - $passageiros;

    $consumoLitros = $distancia / $kmPorLitro;

    $custoViagem = $consumoLitros * $precoCombustivel;

    $valorComLucro = $custoViagem * (1 + $margemLucro);

    $precoPassagem = $valorComLucro / $capacidade;

    $faturamentoLotacao = $precoPassagem * $capacidade;

    $faturamentoReal = $precoPassagem * $passageiros;

    $diferenca = $faturamentoLotacao - $faturamentoReal;

    // Exibição
    echo "<h3>Resultado da Viagem</h3>";

    echo "Origem: $origem <br>";
    echo "Destino: $destino <br><br>";

    echo "a) Passageiros: $passageiros <br>";
    echo "b) Lugares disponíveis: $lugaresVazios <br>";
    echo "c) Consumo: " . number_format($consumoLitros, 2) . " litros <br>";
    echo "d) Custo da viagem: R$ " . number_format($custoViagem, 2) . "<br>";
    echo "e) Custo por passageiro: R$ " . number_format($custoViagem / $passageiros, 2) . "<br>";
    echo "f) Faturamento com lotação: R$ " . number_format($faturamentoLotacao, 2) . "<br>";
    echo "g) Faturamento real: R$ " . number_format($faturamentoReal, 2) . "<br>";
    echo "h) Diferença: R$ " . number_format($diferenca, 2) . "<br>";
    echo "i) Preço da passagem: R$ " . number_format($precoPassagem, 2) . "<br>";

    // Verificação de viabilidade
    if ($faturamentoReal < $valorComLucro) {
        echo "<h3 style='color:red;'>Viagem NÃO é viável.</h3>";
    } else {
        echo "<h3 style='color:green;'>Viagem viável.</h3>";
    }
}
?>

</body>
</html>