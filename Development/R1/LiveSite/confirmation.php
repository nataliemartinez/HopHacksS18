<?php
    session_start();
    ini_set('display_errors', 1);
    error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Product</title>
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>


    <?php

    session_unset();
    session_destroy();

    ?>

    Your registration is complete

    </body>
</html>