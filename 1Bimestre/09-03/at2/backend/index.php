<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Qual é o Maior</title>

<link rel="stylesheet" href="../CSS/style.css">

</head>

<body>

<header>
    <div class="tit-sub">
        <h1 class="titulo">Qual é maior</h1>
        <h3>Entre (A), (B) ou (C)</h3>
    </div>
</header>

<main>

<br>

<div class="formulario">

<form method="GET">

    <h2 class="sub">Informe valores</h2>
    <input type="number" name="A" placeholder="Valor A" required>
    <input type="number" name="B" placeholder="Valor B" required>
    <input type="number" name="C" placeholder="Valor C" required>

    <button type="submit" class="botao">Confirmar</button>

</form>

</div>

<br>

<div class="resultado">

<?php

if(isset($_GET['A'], $_GET['B'], $_GET['C'])){

    $A = $_GET['A'];
    $B = $_GET['B'];
    $C = $_GET['C'];

    // Coloca os valores em um array
    $numeros = [$A, $B, $C];

    // Ordena em ordem decrescente
    sort($numeros);

    // Verifica se os três são iguais
    if($A == $B && $A == $C){
        echo "<p>Eita, os 3 números são iguais !!</p>";
    }

    // Mostra a ordem
    echo "<h2>Ordem decrescente: $numeros[0], $numeros[1], $numeros[2]</h2>";

}

?>
</div>

</main>

</body>
</html>