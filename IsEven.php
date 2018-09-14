<!DOCTYPE html> 
<html lang="en">

<head>
   <!--
        Exercise 02_01_01

        Author: Gabriel Ortega 
        Date: 9.13.18

        IsEven.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Is Even </title>
    <script src="modernizr.custom.65897.js"></script>  
</head>

<body>
    <h2>Is Even</h2>
    
    <?php
    // Generate all new items inside of the blank array
    $numbersArray = array();
    $numbersArray[] = rand(1, 100);
    $numbersArray[] = rand(1, 100);
    $numbersArray[] = rand(1, 100);
    $numbersArray[] = rand(1, 100);
    $numbersArray[] = rand(1, 100);
    $numbersArray[] = rand(1, 100);
    $numbersArray[] = rand(1, 100);
    $numbersArray[] = rand(1, 100);
    $numbersArray[] = rand(1, 100);
    $numbersArray[] = rand(1, 100);
    
    // (($numbersArray[0] % 2) === 0) ? echo "$numbersArray[0] is an even number" : echo "$numbersArray[0] is an odd number";
    
    // Use the for loop to count through the array (RNG). Each time, divide the number by 2 and check if the remainder is 0. If it is, its even. Print the first clause, if not, number is odd and it needs to print the second clause
    for ($i = 0; $i < count($numbersArray); $i++) {
        if (($numbersArray[$i] % 2) === 0) {
            echo "<p>$numbersArray[$i] is an even number</p><br>";
        } else {
            echo "<p>$numbersArray[$i] is an odd number</p><br>";
        }
    }
    
    ?>

</body>

</html>
