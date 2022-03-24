<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 03</title>
</head>

<body>
    <h1>Data Types</h1>
    <br><br><br>



    <h4> <u>Exercise 03 - Average</u> </h4>

    <!-- Exercise 03 - Average -->
    <p> Create three variables <strong>x</strong>, <strong>y</strong> and <strong>z</strong>,
        and calculate the average <strong>average</strong> of the numbers and print it out of the screen.<br>
        Be awere that the average it's a decimal number, so use a function <strong><em>number_format</em></strong> in
        PHP.</p>

    <?php

    
    $x = 12.3;
    $y = 8.9;
    $z = 11.1;
    $average  = ($x + $y + $z) / 3;

    echo "x = {$x}" . "<br>";
    echo "y = {$y}" . "<br>";
    echo "z = {$z}" . "<br><br>";

    echo "Average = (X + Y + Z) / 3" . "<br>";
    echo "Average = ({$x} + {$y} + {$z}) / 3" . "<br>";
    echo "Average = " . number_format($average, 2);


    ?>

</body>

</html>