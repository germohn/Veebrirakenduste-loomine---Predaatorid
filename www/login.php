<?php
include 'language.php';
include 'cookie.php';
require_once "./common/core/database/dbconnect.php";
session_start();

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Predaator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="common/css/style.css">
    <?php include 'language.php' ?>
    <?php include 'cookie.php' ?>

</head>
<body>

<div class="jumbotron">
    <div class="container text-center">
<!--        <div class="alert">--><?//= $_SESSION['message'] ?><!--</div>-->

        <h1><?php echo $lang['PAGE_TITLE']; ?></h1>
        <p><?php echo $lang['HEADER_TITLE']; ?></p>

    </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><?php echo $lang['HOME']; ?></a></li>
                <li><a href="contact.php"><?php echo $lang['CONTACT']; ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#"><span
                                class="glyphicon glyphicon-user"></span> <?php echo $lang['YOUR_ACCOUNT']; ?></a></li>
                <li><a href="#"><span
                                class="glyphicon glyphicon-shopping-cart"></span> <?php echo $lang['SHOPPING_CART']; ?>
                    </a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">

    <div class="row">
        <!-- Log in part  -->
        <div class="col-sm-6">

            <form class="form-horizontal " method="post" action="login.php">
                <fieldset>
                    <legend><?php echo $lang['LOGIN_HERE']; ?> <span title="<?php echo $lang['TOOLTIP3']; ?>"
                                                                     class="glyphicon glyphicon-info-sign"></span>
                    </legend>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-6">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password"
                               class="col-sm-2 col-form-label"><?php echo $lang['PASSWORD']; ?></label>
                        <div class="col-sm-6">
                            <input type="password" id="password" name="password" class="form-control"
                                   placeholder=<?php echo $lang['PASSWORD']; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-6">
                            <button type="submit" id="login" name="login"
                                    class="btn btn-primary"><?php echo $lang['LOGIN']; ?></button>
                        </div>
                    </div>

                </fieldset>
            </form>
            <a href="register.php"><?php echo $lang['USER']; ?></a>
        </div>

    </div>
</div>

<footer class="container-fluid text-center">
    <p>Predaator Copyright</p>
</footer>

</body>
</html>
