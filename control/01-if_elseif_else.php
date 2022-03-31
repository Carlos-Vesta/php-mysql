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

    <?php
        echo "<strong> 1. IF </strong>" . "<br><br>";
        echo " - Executa uma instrucao se uma condicao for verdadeira.";
        echo "<br><br><br>";

        $idade = 33;

        echo "Idade = " . $idade . "<br><br>";

        if ($idade >= 18) {
            echo "Tens permissao para entrar na discoteca.";
        }

        echo "<br><br><br><br>";


        // *********************************************************************************


        echo "<strong> 2. IF ELSE </strong>" . "<br><br>";
        echo " - Executa uma instrucao se a condicao for verdadeira, e se a condicao da outra instrucao for falsa.";
        echo "<br><br><br>";

        $idade1 = 17;

        echo "Idade = " . $idade1 . "<br><br>";

        if ($idade1 >= 18) {
            echo "Tens permissao para entrar na discoteca." . "<br>";

        } else {
            echo "Es muito novo para entrar na discoteca.";
        }

        echo "<br><br><br><br>";


        // *********************************************************************************


        echo "<strong> 3. IF ELSEIF ELSE </strong>" . "<br><br>";
        echo " - Executa instrucoes diferentes, para mais de duas (2) condicoes";
        echo "<br><br><br>";

        $idade3 = 41;


        echo "Idade = " . $idade3 . "<br><br>";

        if ($idade3 > 24 && $idade3 <= 40) {
            echo "Tens permissao para entrar na festa, e nao sem restricoes." . "<br>";

        } elseif ($idade3 >= 18 && $idade3 <= 25) {
            echo "Tem permissao para entrar na festa, mas nao pode beber alcool e nem fumar.";

        } elseif ($idade3 >= 10 && $idade3 < 18) {
            echo "Nao tem permissao para entrar na festa.";

        } elseif ($idade3 >= 0 && $idade3 < 10) {
            echo "Devia estar na cama a dormir.";

        } else {
            echo "Es muito velho para participar da festa.";
        }

        echo "<br><br><br><br>";

        // *********************************************************************************


    ?>

</body>

</html>