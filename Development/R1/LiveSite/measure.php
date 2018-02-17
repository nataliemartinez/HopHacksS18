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
        ${$measurements[$k].Error} = "";
        ${$measurements[$k]} = "";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $incomplete_form = false;

        for ($i = 0; $i < count($measurements); $i++) {
            if (!isset($_POST[$measurements[$i]])){
                ${$measurements[$i].Error} = "This field is required!";
                $incomplete_form = true;
            } else {
                ${$measurements[$i]} = $_POST[$measurements[$i]];
            }
        }

        if (!incomplete_form) {
            $results = array();
            for ($j = 0; $j < count($measurements); $j++){
                $results[$measurements[$j]] = ${$measurements[$j]};
            }
            store_measurements($results, $username);
            header("Location: register.php");
        }

    }

    ?>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <label>Height (cm)</label><?php echo $heightError?>
            <input name="height" type="number">
            <label>Shoulder</label><?php echo $shoulderError?>
            <input name="shoulder" type="number">
            <label>Chest</label><?php echo $chestError?>
            <input name="chest" type="number">
            <label>Waist</label><?php echo $waistError?>
            <input name="waist" type="number">
            <label>Hips</label><?php echo $hipsError?>
            <input name="hips" type="number">
            <label>Inseam</label><?php echo $inseamError?>
            <input name="inseam" type="number">
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