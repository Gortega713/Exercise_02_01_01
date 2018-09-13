<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Is Even </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Is Even</h2>
    
    <?php
    $numbersArray = array(2, 27, 3, 9, 13, 6, 47, 2000, 69, 420);
    
    // (($numbersArray[0] % 2) === 0) ? echo "$numbersArray[0] is an even number" : echo "$numbersArray[0] is an odd number";
    
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
