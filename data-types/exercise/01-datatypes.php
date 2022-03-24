<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 01</title>
</head>

<body>
    <h1>Data Types</h1>
    <br><br><br>


    <?php

    // Exercise 01 - Personal information
    echo "<strong><u>Exercise 01 - Personal information</u></strong>" . "<br>";

    echo "<p> Create two variables (x = 300, y = 270) add them, and multiply it by 5.
        Assign the output to a new variable z.</p>";
    
    $x = 300;
    $y = 270;
    $z = ($x + $y) * 5;

    echo "x = {$x}" . "<br>";
    echo "y = {$y}" . "<br>";
    echo "z = (x + y) * 5" . "<br><br>";
    
    echo "z = ({$x} + {$y}) * 5" . "<br>";
    echo "z = {$z}";
    echo "<br><br><br>";

    ?>

</body>

</html>