<!doctype html>




<html>

<head>
    <!--
        Exercise 02_01_01

        Author: Gabriel Ortega 
        Date: 9.10.18

        MultipleScripts.php
     -->
    <title>PHP Environment Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   
    <h1>PHP Envrionment Info</h1>
    <p>
        This page was rendered with
        <?php
        // prints out the php version that is running on the server
        echo phpversion();
        ?>
    </p>
    <p>
        This PHP code rendered with Zen Engine version
        <?php
        // prints out the version of the Zend Engine that is running on the server
        echo zend_version();
        ?>
    </p>
    <p>
        PHP's default MIME type is
        <?php
        // prints out the default mimetype for PHP
        echo ini_get("default_mimetype");
        ?>
    </p>
    <p>
        The maximum allowable execution time of a PHP script is
        <?php
        // prints out the default max execution time for PHP
        echo ini_get("max_execution_time");
        ?> 
    </p>
    
</body>

</html>
