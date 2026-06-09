<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma em PHP</title>
</head>
<body>
    <?php
        $nome=$_GET['nome'];
        $salario=$_GET['salario'];
        $horaMes=$_GET['horaMes'];

        $bruto= $salario * $horaMes;
        $descont= $bruto * 0.08;
        $liquido= $bruto - $descont;

        echo"Olá $nome, seu salario bruto é de ($bruto) com uma taxa de 8% do INSS ($liquido)";
    ?>
</body>
</html>