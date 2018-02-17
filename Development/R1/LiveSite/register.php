<?php
    session_start();
    ini_set('display_errors', 1);
    error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>


    <?php

    include("utils.php");

    $query = "INSERT INTO users(username, password) VALUES ('jdsakl', 'hjhj')";
    run_query($query);

    //a username already exists

    $username = "";
    $password = "";
    $usernameError = "";
    $passwordError = "";
    $incomplete_form = false;


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(!isset($_POST["username"])) {
            $usernameError = "Please enter a username!";
            $incomplete_form = true;
        } else if(username_exists($_POST["username"])) {
            $usernameError = "This username is already taken";
            $incomplete_form = true;
        }

        if(!isset($_POST["password"])) {
            $passwordError = "Please enter a password!";
            $incomplete_form = true;
        }

        //if (!incomplete_form) {
            store_login($_POST["username"], $_POST["password"]);
            $_SESSION["user_id"] = get_id($_POST["username"]);
            header("Location: measure.php");
        //}

    }

    ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <label>Username</label><?php echo $usernameError?>
            <input name="username" type="text" placeholder="Username" value="<?php echo $username;?>">
            <label>Password</label><?php echo $passwordError?>
            <input name="password" type="password" placeholder="Password">
            <input type="submit">
       </form>
    </body>
</html>