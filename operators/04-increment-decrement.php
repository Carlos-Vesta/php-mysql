<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment / Decrement Operators</title>
</head>

<body>

    <h4>Increment / Decrement Operators</h4>
    <br><br><br>

    <p>Vamos considerar que <strong>x = 10</strong></p>
    <br><br>

    <?php

    $x = 10;

    echo "<strong> 1. Pre-incremento ( ++X ): </strong> Incrementa 'X' por um (1), e retorna 'X'." . "<br>"
    . "Isto eh, incrementa o X e depois visualiza o valor de X.";

    echo "<br><br>";

    echo "Valor inicial: " . $x . "<br>";
    echo "<strong> O que retorna: </strong>" . "<strong>" . ++$x . "</strong><br>";
        echo "Pre-incremento: " . $x;
    echo "<br><br><br><br>";

    ?>

    <!-- ******************************************************************************************************** -->

    <?php

        $x = 10;

        echo "<strong> 2. Pos-incremento ( X++ ): </strong> Retorna 'X', e depois incrementa 'X' por um (1)."
         . "<br>" . "Isto eh, visualiza o valor de X, e depois incrementa o X.";

        echo "<br><br>";

        echo "Valor inicial: " . $x . "<br>";
        echo "<strong> O que retorna: </strong>" . "<strong>" . $x++ . "</strong><br>";
        echo "Pos-incremento: " . $x;
        echo "<br><br><br><br>";

    ?>

    <!-- ******************************************************************************************************** -->

    <?php

        $x = 10;

        echo "<strong> 3. Pre-decremento ( --X ): </strong> Decrementa 'X' por um (1), e retorna 'X'." . "<br>"
        . "Isto eh, decrementa o X e depois visualiza o valor de X.";

        echo "<br><br>";

        echo "Valor inicial: " . $x . "<br>";
        echo "<strong> O que retorna: </strong>" . "<strong>" . --$x . "</strong><br>";
        echo "Pre-decremento: " . $x;
        echo "<br><br><br><br>";

    ?>

    <!-- ******************************************************************************************************** -->

    <?php

        $x = 10;

        echo "<strong> 4. Pos-decremento ( X-- ): </strong> Retorna 'X', e depois decrementa 'X' por um (1)."
         . "<br>" . "Isto eh, visualiza o valor de X, e depois decrementa o X.";

        echo "<br><br>";

        echo "Valor inicial: " . $x . "<br>";
        echo "<strong> O que retorna: </strong>" . "<strong>" . $x-- . "</strong><br>";
        echo "Pos-decremento: " . $x;

    ?>

    <!-- ******************************************************************************************************** -->

</body>

</html>