<?php
if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {

    $_SESSION["welcomemsg"] = "Welcome " . $_SESSION["firstName"] . ", you are now loged in!";

} else {
    $_SESSION["message"] = "You have to log in";
    header("location: login.php");
}