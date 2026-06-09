<?php

$altura = $_POST['altura'];
$sexo = $_POST['sexo'];

if ($sexo == "M") {
    $pesoIdeal = (72.7 * $altura) - 58;
} else {
    $pesoIdeal = (62.1 * $altura) - 44.7;
}

echo "<div class='resultado'>Seu peso ideal é: " . number_format($pesoIdeal,2) . " kg</div>";

?>