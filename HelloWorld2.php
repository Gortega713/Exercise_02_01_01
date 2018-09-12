<!doctype html>




<html>

<head>
    <!--
        Exercise 02_01_01

        Author: Gabriel Ortega 
        Date: 9.10.18

        HelloWorld2.php
     -->
    <title>Hello World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <?php
    // Global Variables
    $worldVar = "world";
    $sunVar = "Sun";
    $moonVar = "Moon";
    // Define constructor
    define("WORLD_INFO", 92897000);
    define("SUN_INFO", 72000000);
    define("MOON_INFO", 3456);
    
    echo "<p>Hello $worldVar!<br>";
    // Format constant to put in commas and no decimals 
    echo "The $worldVar is ", number_format(WORLD_INFO, 0), " miles from the $sunVar. <br>";
    echo "Hello ", $sunVar, "!<br>";
    // Format constant to put in commas and 2 decimals 
    echo "The $sunVar's core temperature is approximately ", number_format(SUN_INFO, 2), " degrees Fahrenheit.<br>";
    echo "Hello ", $moonVar, "!<br>";
    // Format constant to put in commas and no decimals 
    echo "The $moonVar is ", number_format(MOON_INFO, 0), " miles in diameter.<p>";
    ?>

</body>

</html>
