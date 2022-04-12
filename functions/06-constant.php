<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Statement</title>
</head>

<body>
    <h4>Functions Statement</h4>
    <br><br><br>

    <?php
        echo "<strong> Constants </strong>";
        echo "<br><br><br>";

        echo "<strong>Constantes:</strong> são como variáveis, exceto que, uma vez definidas, elas não podem ser alteradas ou indefinidas. <br>
        Uma constante é um identificador (nome) para um valor simples. O valor não pode ser alterado durante o script. <br>";

        echo "Um nome de uma constante válida começa com uma letra ou sublinhado (sem sinal $ antes do nome da constante). <br>
        Ao contrário das variáveis, as constantes são automaticamente globais em todo o script. <br>
        Identificadores de Constantes sao sempre difinidas em UPPERCASE";


        echo "<br><br><br>";
        // *********************************************************************************

        echo "<strong>* Function: </strong><span style='color: red;'>define ( )</span>" . "<br><br>";
        echo "define(ARGUMENT 1, ARGUMENT 2);" . "<br><br>";

        echo "<strong>ARGUMENT 1: </strong> nome da constante" . "<br>";
        echo "<strong>ARGUMENT 2: </strong> valor da constante" . "<br>";

        echo "<br><br>";

        echo "Ex: define('FIRST_NAME', 'Carlos') <br>
        echo FIRST_NAME;" . "<br><br>";

        define("FIRST_NAME", "Carlos");

        echo "The output is: " . FIRST_NAME;


        echo "<br><br><br><br><br>";
        // *********************************************************************************


        echo "<strong>* Keyword: </strong><span style='color: red;'>CONST</span>" . "<br><br>";
       
        echo "Ex: const LAST_NAME = 'Vesta'; <br>
        echo LAST_NAME; <br><br>";

        const LAST_NAME = "Vesta";

        echo "The output is: " . LAST_NAME;

        



        echo "<br><br><br>";
        // *********************************************************************************



       
       
       
    ?>

</body>

</html>