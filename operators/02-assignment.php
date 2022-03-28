<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment operators</title>
</head>

<body>
    <?php
        // ASSIGNMENT OPERATORS

        //      +=   Add and assign
        //      -=   Subtract and assign
        //      *=   Multiply and assign
        //      /=   Divide and assign
        //      .=   Concatenate and assign

        $x = 33;
        $name = "Carlos";

        echo "X = {$x}" . "<br>";
        echo "Name = {$name}";
        echo "<br><br><br><br>";


        echo "- <strong>Add</strong> 2 and assign to x variable: <strong>(x =+ 2)</strong>" . "<br>" . "Result: " . $x += 2;
        echo "<br><br>";


        echo "- <strong>Subtract</strong> 2 and assign to x variable: <strong>(x -= 2)</strong>" . "<br>" . "Result: " . $x -= 2;
        echo "<br><br>";


        echo "- <strong>Multiply</strong> 2 and assign to x variable: <strong>(x *= 2)</strong>" . "<br>" . "Result: " . $x *= 2;
        echo "<br><br>";


        echo "- <strong>Divide</strong> 2 and assign to x variable: <strong>(x /= 2)</strong>" . "<br>" . "Result: " . $x /= 2;
        echo "<br><br>";


        echo "- <strong>Concatenate</strong> Vesta and assign to name variable: <strong>(name .= Vesta)</strong>" . "<br>" . "Result: " . $name .= " Vesta";
        echo "<br><br>";
        

    ?>

</body>

</html>