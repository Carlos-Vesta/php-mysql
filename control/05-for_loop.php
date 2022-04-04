<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Statement</title>
</head>

<body>
    <h4>Control Statement</h4>
    <br><br><br>

</body>
<?php
        echo "<strong> FOR LOOP </strong>" . "<br><br>";
        echo " - Executa o bloco de instrucoes, num determinado numero de vezes" . "<br>
        O FOR LOOP eh usado quando sabemos quantas vezes o codigo deve ser executado.";
        echo "<br><br><br>";

        echo "<em>Vamos criar um loop, que imprima numeros inteiros de 40 a 60</em>" . "<br><br>";

        /*

        for (init counter; test counter; increment counter) {
            code to be executed for each iteration;
          }

        */

        for ($numero = 40; $numero <= 60; $numero++) {
            echo "O numero eh: " . $numero . "<br>";
        }

    ?>

<br><br><br><br>

<?php
        echo "* Foi ao banco depositar 1000MT, e a taxa de juros eh de 5% por ano.
        Quanto eh que terei apos 5 anos?";

        echo "<br><br><br>";

        $deposito = 1000;
        $juros = 0.05;
        

        for ($ano = 1; $ano <= 5; $ano++) {

            $deposito = ($deposito * $juros) + $deposito;

            echo "O total na conta depois de " . $ano . " ano(s) eh: " . $deposito;
            echo "<br>";
        }

    ?>

</html>