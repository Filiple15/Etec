<HTML><!-- EXERCÍCIO 04 - PHP -->
    <HEAD><TITLE>Exercício 04</TITLE></HEAD>
    <BODY BGCOLOR="red" TEXT="white">
        <CENTER>
            <H1>Exercício 04 - Verificação do Sexo das Equipes</H1
            <H2>Utilizando Condicional com if()</H2>
            <HR><B><FONT FACE= "arial" SIZE="4" COLOR="yellow">
            <HR>
            <?php
            //Definindo variáveis e valores
            $aluno1="José";
            $aluno2="Silva";
            $nomes="$aluno1 e $aluno2";
            $sexo1="F";
            $sexo2="M";
            //Utilizando a condicional if() com operadores lógicos
            if ($sexo1 == "M" && $sexo2 == "M")
            {
            echo "$nomes - Só tem macho nessa equipe!</H1>";
            }
            elseif ($sexo1 == "F" && $sexo2 == "F")
            {
            echo "$nomes - Só tem mulher de verdade nessa equipe!</H1>";
            }
            else
            {
            echo "$nomes - Que lindo casal!</H1>";
            }
            ?>
        </CENTER>
    </BODY>
</HTML>