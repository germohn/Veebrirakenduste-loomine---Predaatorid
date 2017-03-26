<?php
require_once "./common/core/database/dbconnect.php";

if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {

    header("location: home.php");
}
if (isset($_POST["login"])) {

//    var_dump(1);
    if (empty($_POST["email"]) || empty($_POST["password"])) {
//        var_dump(2);
        $error = "Username or Password is invalid";
    } else {
// username and password sent from form

        $myusername = mysqli_real_escape_string($connect, $_POST['email']);
        $mypassword = md5($_POST["password"]);


        $sql = "SELECT first_name FROM users WHERE email = '$myusername' and password = '$mypassword'";

        $query = mysqli_query($connect, $sql);
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {

            $nameResult = mysqli_fetch_assoc($query);
//            var_dump($nameResult); // prindib array


            $_SESSION["firstName"] = (string)$nameResult['first_name'];
            $_SESSION["email"] = $myusername;
            $_SESSION["loggedIn"] = true;

            header("location: home.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
        mysqli_close($connect); // Closing Connection
    }
}