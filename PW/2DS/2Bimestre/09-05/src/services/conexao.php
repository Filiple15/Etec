<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "escola";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>