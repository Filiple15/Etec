<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado do Salário</title>

<style>

body{
    font-family: Arial, sans-serif;
    background: #f4f6f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container{
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    text-align: center;
}

.resultado{
    color: #2c7be5;
    font-size: 32px;
}

</style>
</head>

<body>

<div class="container">

<?php

$salario = $_GET['salario'];
$horas = $_GET['horas'];
$tempo = $_GET['tempo'];

$salariofinal = $salario * $horas;

if ($tempo > 10){
    $result = $salariofinal + ($salariofinal * 0.15);
}else{
    $result = $salariofinal;
}

echo "<h1 class='resultado'>Salário final: R$ $result</h1>";

?>

</div>

</body>
</html>