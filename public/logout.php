<?php
session_start();
function pageController() {
    session_unset();

    session_regenerate_id(true);

    header("Location: login.php");
}
pageController();
?>