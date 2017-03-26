<?php
if (!isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] != true) {
    $_SESSION["message"] = "You have to log in";
    header("location: login.php");
}

