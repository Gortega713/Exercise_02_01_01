<!doctype html>




<html>

<head>
    <!--
        Exercise 02_01_01

        Author: Gabriel Ortega 
        Date: 9.10.18

        Operators.php
     -->
    <title>Operators</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Operators</h2>
    <?php
    // Addition
    $x = 100;
    $y = 200;
    $returnValue = $x + $y;
    echo '<p>$returnValue after addition: ', $returnValue, "</p>";
    
    // Modulus
    $x = 3;
    $y = 2;
    $returnValue = $x % $y;
    echo '<p>$returnValue after modulus: ', $returnValue, "</p>";
    
    // Compound
    $x = "Hello ";
    $y = "World!";
    $x .= $y;
    
    echo '<p>$returnValue after operation: ', $x, "</p>";
    ?>

</body>

</html>
