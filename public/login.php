<?php
    session_start();
    function pageController() {
    require_once "functions.php";
        // var_dump($_SERVER);
        if (isset($_SESSION["logged_in_user"])) {
            header("Location: authorized.php");
            exit();
        } else {

            $username="";
            $password="";
            // $_SERVER["REQUEST_METHOD"]==="POST" ? var_dump("Post method") : var_dump("Not Post method");

            $username=inputHas("username") ? $_POST["username"] : "";

            $password=inputHas("password") ? $password=$_POST["password"] : "";

            // var_dump($_POST);
            if ($username=="guest" && $password=="password") {

               $_SESSION["logged_in_user"]=$username;

                header("Location: authorized.php");
                exit();
            } 
        }
            var_dump($_SESSION);
   }

   pageController();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login example</title>
</head>
<body>

    <form method="POST">
    <p>
        <input id="username" name="username" type="text" placeholder="Username">
    </p>

    <p>
        <input id="password" name="password" type="password" placeholder="Enter password here">
    </p>

    <p>
        <input type="submit">
    </p>

    </form>

</body>
</html>