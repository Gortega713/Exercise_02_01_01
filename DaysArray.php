<!DOCTYPE html>
<html lang="en"> 

<head> 
   <!--
        Exercise 02_01_01

        Author: Gabriel Ortega 
        Date: 9.13.18

        DaysArray.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Days Array </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Days Array</h2>
    
    <?php
    // Array for English days of the week
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    
    // Output the days of the week, in English, using the array and their indexes
    echo "<p>The days of the week in English are: $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], and $days[6]</p><br>"; 
    
    // Replace all items inside of the array with French days of the week
    $days[0] = "Dimanche";
    $days[1] = "Lundi";
    $days[2] = "Mardi";
    $days[3] = "Mercredi";
    $days[4] = "Jeudi";
    $days[5] = "Vendredi";
    $days[6] = "Samedi";
    
    // Output the days of the week, in French, using the array and their indexes
    echo "<p>The days of the week in French are: $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], and $days[6]</p>"; 
    ?>
</body>

</html>
