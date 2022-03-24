<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 05</title>
</head>

<body>
    <h1>Data Types</h1>
    <br><br><br>



    <h4> <u>Exercise 05 - Countries and Capitals</u> </h4>

    <!-- Exercise 05 - Countries and Capitals -->
    <p> Create any integer <strong><em>cmToInch</em></strong>, that converts a number of centimeters
        <strong>"cm"</strong> to inches <strong>"inch"</strong>
    </p>

    <p><em>Tip: 1 centimeter is equivalent to 0.39 inch.</em></p>



    <?php
    $cm = 5;
    $inch = 0.39;
    $cmToInch = ($cm * $inch) / 1;

    echo "{$cm} cm is equivalent to {$cmToInch}";

    ?>

</body>

</html>