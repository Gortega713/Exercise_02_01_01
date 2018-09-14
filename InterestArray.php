<!DOCTYPE html>
<html lang="en">

<head>
   <!--
        Exercise 02_01_01

        Author: Gabriel Ortega 
        Date: 9.13.18

        InterestArray.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Interest Array </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Interest Array</h2>
    
    <?php
    // Global Variables
    $interestRate1 = .0725;
    $interestRate2 = .0750;
    $interestRate3 = .0775;
    $interestRate4 = .0800;
    $interestRate5 = .0825;
    $interestRate6 = .0850;
    $interestRate7 = .0875;
    
    // Output all variables inside of their own <p> tag and formatted to 4 decimal places
    echo "<p>Interest rate #1: ", number_format($interestRate1, 4), "<br>";
    echo "<p>Interest rate #2: ", number_format($interestRate2, 4), "<br>";
    echo "<p>Interest rate #3: ", number_format($interestRate3, 4), "<br>";
    echo "<p>Interest rate #4: ", number_format($interestRate4, 4), "<br>";
    echo "<p>Interest rate #5: ", number_format($interestRate5, 4), "<br>";
    echo "<p>Interest rate #6: ", number_format($interestRate6, 4), "<br>";
    echo "<p>Interest rate #7: ", number_format($interestRate7, 4), "<br></p>";
    ?>
</body>

</html>
