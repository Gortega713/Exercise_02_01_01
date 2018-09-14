<!doctype html>




<html>

<head>
    <!--
        Exercise 02_01_01

        Author: Gabriel Ortega  
        Date: 9.13.18

        Functions.php
     -->
    <title>Functions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h2>Passing Parameters</h2> 

    <?php
    function incrementByValue($countByValue) {
        ++$countByValue;
        echo "<p>incrementByValue() value is $countByValue.</p>";
    }
    
    function incrementByReference(&$countByReference) {
        ++$countByReference;
        echo "<p>incrementByValue() value is $countByReference.</p>";
    }
    
    // Output for incrementByValue() function
    $count = 1;
    echo "Increment by Value";
    echo "<p>Main Program starting value is $count.</p>";
    incrementByValue($count);
    echo "<p>Main Program ending value is $count.</p><br><br>";
    
    // Output for incrementByReference() function
    echo "Increment by Reference";
    $count = 1;
    echo "<p>Main Program starting value is $count.</p>";
    incrementByReference($count);
    echo "<p>Main Program ending value is $count.</p>";
    ?>
    
    <h2>Default Arguments</h2>
    
    <?php
    // Parameter is passed by value because it is NOT using an "&"
    function paint($room = "office", $color = "red") {
        return "<p>The color of the $room is $color.</p>";
    }
    
    echo paint();
    echo paint("bedroom", "blue");
    echo paint("bedroom", null);
    echo paint("bedroom");
    echo paint("blue");
    ?>

</body>

</html>
