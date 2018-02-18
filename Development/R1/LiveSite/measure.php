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

    include("utils.php");

    $measurements = array("height", "shoulder", "chest", "waist", "hips", "inseam");
    for ($k = 0; $k < count($measurements); $k++) {
        ${$measurements[$k]} = "";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        for ($i = 0; $i < count($measurements); $i++) {
            ${$measurements[$i]} = $_POST[$measurements[$i]];
        }

        $results = array();
        for ($j = 0; $j < count($measurements); $j++){
            $results[$measurements[$j]] = ${$measurements[$j]};
        }
        store_measurements($results, $_SESSION['username']);
        header("Location: confirmation.php");


    }

    ?>

    
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <label>Height (cm)</label>
            <input name="height" type="number" required>
            <label>Shoulder</label>
            <input name="shoulder" type="number" required>
            <label>Chest</label>
            <input name="chest" type="number" required>
            <label>Waist</label>
            <input name="waist" type="number" required>
            <label>Hips</label>
            <input name="hips" type="number" required>
            <label>Inseam</label>
            <input name="inseam" type="number" required>
            <input type="submit">
       </form>
        <div class="bg">
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
            </div>
        </div>
        
        <script src="scripts/jquery-3.2.1.min.js"></script>
        <script src="scripts/bg.js"></script>
    </body>
</html>
