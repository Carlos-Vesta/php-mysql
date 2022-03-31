<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>

<body>

    <h4>Logical Operators</h4>
    <br><br><br>

</body>
<?php

    echo "<strong> 1. AND ( && )</strong>" . "<br><br>";
    echo "Eh Verdade se as duas condicoes forem verdadeiras." . "<br>";
    echo "Ex: <em>( 5 == 5 ) && ( 10 != 5 )</em> <strong>True</strong>";
    echo "<br><br>";


    $a = 10;
    $b = 10;
    $c = 15;
    $d = 20;

    if ($a == $b && $c != $d) {

        echo "{$a} == {$b} and {$c} != {$d} <strong>True</strong>" . "<br>";

    } else {
        
        echo "{$a} == {$b} and {$c} != {$d} <strong>False</strong>";
    }

    echo "<br><br><br><br>";


    // *********************************************************************************


    echo "<strong> 2. OR ( || )</strong>" . "<br><br>";
    echo "Eh Verdade se pelo menos uma das condicoes for verdadeira, ou entao as duas verdadeiras." . "<br>";
    echo "Ex: <em>( 5 == 5 ) || ( 10 == 5 )</em> <strong>True</strong>";
    echo "<br><br>";


    $e = 10;
    $f = 10;
    $g = 20;
    $h = 20;



    if ($e == $f || $g == $g) {

        echo "{$e} == {$f} or {$g} != {$h} <strong>True</strong>" . "<br>";

    } else {
        
        echo "{$e} == {$f} or {$g} != {$h} <strong>False</strong>";
    }

    echo "<br><br><br><br>";

    // *********************************************************************************

    echo "<strong> 3. XOR </strong>" . "<br><br>";
    echo "Eh Verdade se pelo menos uma das condicoes for verdadeira, mas nao as duas verdadeiras." . "<br>";
    echo "Ex: <em>( 5 == 5 ) xor ( 10 == 5 )</em> <strong>True</strong>";
    echo "<br><br>";


    $i = 10;
    $j = 10;
    $k = 20;
    $l = 20;



    if ($i == $j xor $k == $l) {

        echo "{$i} == {$j} xor {$k} != {$l} <strong>True</strong>" . "<br>";

    } else {
        
        echo "{$i} == {$j} xor {$k} != {$l} <strong>False</strong>";
    }

    echo "<br><br><br><br>";

    // *********************************************************************************

    echo "<strong> 4. NOT ( ! ) </strong>" . "<br><br>";
    echo "Eh Verdade se a primeira condicao nao for verdadeira. Eh uma negacao da outra condicao" . "<br>";
    echo "Ex: <em> !10 != 10 </em> <strong>True</strong>";
    echo "<br><br>";


    $m = 0;
    $n = 10;
    $o = 20;
    $p = 20;



    if (!$o == $p) {

        echo "!{$o} == {$p} <strong>True</strong>" . "<br>";

    } else {
        
        echo "!{$o} == {$p} <strong>False</strong>";
    }

    echo "<br><br><br><br>";

    // *********************************************************************************




    ?>

</html>