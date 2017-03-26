<?php
require_once "./common/core/database/dbconnect.php";
$_SESSION['message'] = "";

if (isset($_POST["register"])) {

    if ($_POST["password"] == $_POST["password_confirmation"]) {

        $firstname = mysqli_real_escape_string($connect, $_POST["fn"]);
        $lastname = mysqli_real_escape_string($connect, $_POST["ln"]);
        $email = mysqli_real_escape_string($connect, $_POST["email"]);
        $password = md5($_POST['password']);

        echo "$firstname + $lastname + $email + $password";

        $query = "INSERT into users (first_name, last_name, email, password) " . "VALUES " . "('$firstname', '$lastname', '$email', '$password')";

        echo $query;
        // if succesful redirect home.php
        if (mysqli_query($connect, $query)) {
            $_SESSION['message'] = "registration succesful, added $email to database";
            header("location: login.php");
        } else {
            $_SESSION['message'] = "User could not be added to database ";
        }


    } else {
        $_SESSION['message'] = "Passwords did not match";
    }


}