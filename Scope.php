<!doctype html>




<html>

<head>
    <!--
        Exercise 02_01_01

        Author: Gabriel Ortega 
        Date: 9.13.18

        Scope.php
     -->
    <title>Variable Scope</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h2>Variable Scope</h2>

    <?php
    // Global Variable
    $globalVariable = "Global Variable";
    
    function scopeExample() {
        $localVariable = "Local Variable";
        echo "<p>This is a $localVariable</p>";
    }
    
    function globalExample() {
        $globalVariable = "Another One";
        echo "<p>This is a $globalVariable</p>";
    }
    
    scopeExample();
  
    echo "<p>This is a $globalVariable</p>";
        
    
    
    globalExample();
    ?>

</body>

</html>
