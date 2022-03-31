<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>

<body>
    <h4>Comparison Operators</h4>
    <br><br><br>



    <?php
        echo "<strong> 1 - Maior que ( < ) : </strong>" . 
        "Retorna <strong>Verdade</strong> se 'X' for maior que 'Y'. Caso contrario, retorna <strong>Falso</strong> " . "<br>" 
        . "<strong> Greater than: </strong>";
        echo "<br><br>";

        $x = 13;
        $y = "13";

        echo "X = " . $x . "<br>" . "Y = " . $y;
        echo "<br><br>";

        
        if ($x > $y) {

            echo "Isso eh verdade.";

        } else {
            echo "Isso eh falso.";
        }

        echo "<br><br><br>";

        // ***************************************************************

        echo "<strong> 2 - Menor que ( < ) : </strong>" . 
        "Retorna <strong>Verdade</strong> se 'X' for menor que 'Y'. Caso contrario, retorna <strong>Falso</strong>" . "<br>" 
        . "<strong> Less than: </strong>";
        echo "<br><br>";

        echo "X = " . $x . "<br>" . "Y = " . $y;
        echo "<br><br>";

        
        if ($x < $y) {

            echo "Isso eh verdade.";

        } else {
            echo "Isso eh falso.";
        }

        echo "<br><br><br>";

        // ***************************************************************

        echo "<strong> 3 - Maior ou igual a ( >= ) : </strong>" . 
        "Retorna <strong>Verdade</strong> se 'X' for maior ou igual a 'Y'. Caso contrario, retorna <strong>Falso</strong>" . "<br>" 
        . "<strong> Greater than or equal to: </strong>";
        echo "<br><br>";

        
        echo "X = " . $x . "<br>" . "Y = " . $y;
        echo "<br><br>";

        
        if ($x >= $y) {

            echo "Isso eh verdade.";

        } else {
            echo "Isso eh falso.";
        }

        echo "<br><br><br>";

        // ***************************************************************

        echo "<strong> 4 - Menor ou igual a ( <= ) : </strong>" . 
        "Retorna <strong>Verdade</strong> se 'X' for menor ou igual a 'Y'. Caso contrario, retorna <strong>Falso</strong>" . "<br>" 
        . "<strong> Less than or equal to: </strong>";
        echo "<br><br>";

        
        echo "X = " . $x . "<br>" . "Y = " . $y;
        echo "<br><br>";

        
        if ($x <= $y) {

            echo "Isso eh verdade.";

        } else {
            echo "Isso eh falso.";
        }

        echo "<br><br><br>";

        // ***************************************************************

        echo "<strong> 5 - Nave Espacial ( <=> ) : </strong>" . 
        "Retorna um numero inteiro menor que, igual a, ou maior que zero (0). Dependendo se 'X' eh menor que,
        igual a, ou maior que 'Y'." . "<br>" . "<strong> Spaceship: </strong>";
        echo "<br><br>";

        
        echo "X = " . $x . "<br>" . "Y = " . $y;
        echo "<br><br>";

      
        echo ($x <=> $y); 
        echo "<br><br>";

        // ***************************************************************

        echo "<strong> 6 - Igual ( == ) : </strong>" . 
        "Retorna <strong>Verdade</strong> se 'X' for igual a 'Y'. Caso contrario, retorna <strong>Falso</strong> " . "<br>" 
        . "<strong> Equal: </strong>";
        echo "<br><br>";

       
        echo "X = " . $x . "<br>" . "Y = " . $y;
        echo "<br><br>";

        
        if ($x == $y) {

            echo "Isso eh verdade.";

        } else {
            echo "Isso eh falso.";
        }

        echo "<br><br><br>";

        // ***************************************************************


        echo "<strong> 7 - Idêntico ( === ) : </strong>" . 
        "Retorna <strong>Verdade</strong> se 'X' for idêntico a 'Y', e se eles forem do mesmo tipo. 
        Caso contrario, retorna <strong>Falso</strong> " . "<br>" . "<strong> Identical: </strong>";
        echo "<br><br>";

       
        echo "X = " . $x . "<br>" . "Y = " . $y;
        echo "<br><br>";

        
        if ($x === $y) {

            echo "Isso eh verdade.";

        } else {
            echo "Isso eh falso.";
        }

        echo "<br><br><br>";

        // ***************************************************************

        echo "<strong> 8 - Não igual ( != ) : </strong>" . 
        "Retorna <strong>Verdade</strong> se 'X' for nao igual a 'Y'. Caso contrario, retorna <strong>Falso</strong> " . "<br>" 
        . "<strong> Not equal: </strong>";
        echo "<br><br>";

       
        echo "X = " . $x . "<br>" . "Y = " . $y;
        echo "<br><br>";

        
        if ($x != $y) {

            echo "Isso eh verdade.";

        } else {
            echo "Isso eh falso.";
        }

        echo "<br><br><br>";

        // ***************************************************************

        echo "<strong> 9 - Não igual ( <> ) : </strong>" . 
        "Retorna <strong>Verdade</strong> se 'X' for nao igual a 'Y'. Caso contrario, retorna <strong>Falso</strong> " . "<br>" 
        . "<strong> Not equal: </strong>";
        echo "<br><br>";

       
        echo "X = " . $x . "<br>" . "Y = " . $y;
        echo "<br><br>";

        
        if ($x <> $y) {

            echo "Isso eh verdade.";

        } else {
            echo "Isso eh falso.";
        }

        echo "<br><br><br>";

        // ***************************************************************

        echo "<strong> 10 - Não idênticos ( !== ) : </strong>" . 
        "Retorna <strong>Verdade</strong> se 'X' não for idêntico a 'Y', ou eles nao sao do mesmo tipo. 
        Caso contrario, retorna <strong>Falso</strong> " . "<br>" . "<strong> Not equal: </strong>";
        echo "<br><br>";

       
        echo "X = " . $x . "<br>" . "Y = " . $y;
        echo "<br><br>";

        
        if ($x !== $y) {

            echo "Isso eh verdade.";

        } else {
            echo "Isso eh falso.";
        }

        echo "<br><br><br>";

        // ***************************************************************





    ?>

</body>

</html>