<?php
    session_start();
    ini_set('display_errors', 1);
    error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Size Up</title>
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>


    <?php

    include("utils.php");

    $username = "";
    $password = "";
    $usernameError = "";
    $incomplete_form = false;


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(username_exists($_POST["username"])) {
            $usernameError = "This username is already taken";
            $incomplete_form = true;
        }

        if (!$incomplete_form) {
            store_login($_POST["username"], $_POST["password"]);
            $_SESSION["username"] = $_POST["username"];
            header("Location: measure.php");
        }

    }
        
    ?>
        <div class="container">
            <div class="landing">
                <svg class="logo-anim">
                    <use xlink:href="img/svg/simplified.svg#hanger-simple"></use>
                </svg>
                <h1>Size&#8212;<span><h1>Up</h1><h1>Down</h1><h1>???</h1><h1>*</h1><h1>Up</h1></span></h1>
                <a id="register">Register &gt;</a>
            </div>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <label>Username</label>
                <span>
                    &nbsp;<?php echo $usernameError?>
                </span>
                
                <input name="username" type="text" placeholder="&nbsp&nbsp;&nbsp&nbsp;Username" value="<?php echo $username;?>" required>
                <label>Password</label>
                <span>&nbsp;</span>
                <input name="password" type="password" placeholder="&nbsp&nbsp;&nbsp&nbsp;Password" required>
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
        <script src="scripts/functions.js"></script>
        <script src="scripts/bg.js"></script>
    </body>
</html>
