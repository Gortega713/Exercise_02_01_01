<!doctype html>




<html>

<head>
    <!--
        Exercise 02_01_01

        Author: Gabriel Ortega 
        Date: 9.10.18

        Concerts.php
     -->
    <title>Concerts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    $concerts = array("Jimmy Buffet", "Chris Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
    // Append to the end of the array
    $concerts[] = "Bob Dylan";
    $concerts[] = "Joan Jett";
    echo "<P>The following ",
    // The same as length in JavaScript
    count($concerts), " concerts are scheduled.</p><p>";
        
    echo "$concerts[0]<br>";
    echo "$concerts[1]<br>";
    echo "$concerts[2]<br>";
    echo "$concerts[4]<br>";
    echo "$concerts[5]<br>";
    echo "$concerts[6]<br>";
    
    // print_r() will disable HTML and show off the array
    echo "<pre>";
    print_r($concerts);
    echo "</pre>";
    
    // print_r() will disable HTML and show off the array along with its length and data type
    echo "<pre>";
    var_dump($concerts);
    echo "</pre>";
    ?>
    

</body>

</html>
