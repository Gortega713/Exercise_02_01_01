<!doctype html>




<html>

<head>
    <!--
        Exercise 02_01_01

        Author: Gabriel Ortega 
        Date: 9.10.18

     -->
    <title>PHP Code Blocks</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>
        <?php
            echo "This text is displayed using standard PHP script delimiters.<br>";
            print "Second String.<br>";
            print("Third String.");
            echo "<h1>This is a " , "multiple argument string</h1>";
            echo ("<h1>This is a " . "multiple argument string</h1>");
            print("<h2>This is some math: " . (2 + 3) . "</h2>")
        ?>
    </p>
</body>

</html>
