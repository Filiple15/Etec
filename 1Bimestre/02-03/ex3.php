<HTML><!-- EXERCÍCIO 03 - PHP -->
    <HEAD><TITLE>Exercício 03</TITLE></HEAD>
    <BODY BGCOLOR="pink" TEXT="red">
        <CENTER>
            <H1>Exercício 03 - Trabalhando com Datas</H1>
            <H2>Utilizando Funções de Data</H2>
            <H3>Aluno1 - Aluno2</H3><HR><B>
            <FONT FACE= "arial" SIZE="4" COLOR="darkblue">
            <?php
            //Utilizando date()
            echo "Data e Hora atual: ";
            echo date("F jS Y, h:iA");
            echo "<HR>";
            //Utilizando checkdate()
            $mes = 02;
            $dia = 16;
            $ano = 1970;
            $resp = checkdate($mes, $dia, $ano);
            if ($resp == 1)
            {
            echo "A Data $dia/$mes/$ano é Válida !";
            }
            else
            {
            echo "A Data $dia/$mes/$ano é Inválida !";
            }
            //Utilizando mktime()
            echo "<HR>";
            $hora = 06;
            $min = 35;
            $seg = 55;
            $dt = mktime($hora, $min, $seg, $mes, $dia, $ano);
            echo "Data $dia/$mes/$ano às $hora:$min:$seg= $dt";
            //Utilizando time() e microtime()
            echo "<HR>A hora atual é ";
            echo time();
            echo "<HR>A hora atual exata é";
            echo microtime();
            ?>
        </CENTER>
    </BODY>
</HTML>