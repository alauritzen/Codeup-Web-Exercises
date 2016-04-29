<?php
session_start();
function pageController() {
    if (!isset($_SESSION["logged_in_user"])) {
        header("Location: login.php");
        exit(); 
    } else {
        return ($_SESSION);
    }
}
extract(pageController());
pageController();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Authorized</title>
</head>
<body>
    <img src="http://weknowmemes.com/wp-content/uploads/2012/01/respect-my-authoritah-kim-jong-un.jpg">
    <p>Congratulations, authorized comrade <?= htmlentities($logged_in_user) ?>.</p>
    <p><a href="logout.php">Logout</a></p>

</body>
</html>