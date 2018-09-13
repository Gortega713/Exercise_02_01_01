<!DOCTYPE html>
<html lang="en">

<head>
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
    
    $ratesArray = array($interestRate1, $interestRate2, $interestRate3, $interestRate4, $interestRate5, $interestRate6, $interestRate7);
    
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
