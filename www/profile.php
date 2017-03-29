<?php


session_start();
include 'loggedIn.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Predaator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="common/css/style.css">
    <?php include 'language.php' ?>
    <?php include 'cookie.php' ?>
</head>
<body>

<div class="jumbotron">
    <div class="container text-center">
        <h1><?php echo $lang['PAGE_TITLE']; ?></h1>
        <p><?php echo $lang['HEADER_TITLE']; ?></p>
    </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
 <li class="active"><a href="home.php"><?php echo $lang['HOME']; ?></a></li>
                <li><a href="#"><?php echo $lang['PRODUCTS']; ?></a></li>
                <li><a href="#"><?php echo $lang['DEALS']; ?></a></li>
                <li><a href="#"><?php echo $lang['STORES']; ?></a></li>
                <li><a href="contact.php"><?php echo $lang['CONTACT']; ?></a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?= $_SESSION["firstName"] ?></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> <?php echo $lang['SHOPPING_CART']; ?></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <h3><?= $_SESSION["welcomemsg"] ?></h3>
    <br>
    <h3><?php echo $lang['FIRST_NAME'] .": "; ?> <?= $_SESSION["firstName"] ?></h3>
    <br>
    <h3>E-mail: <?= $_SESSION["email" ] ?></h3>
    <br>
    <button class = 'btn'><a href="logout.php"><?php echo $lang['LOGOUT']; ?></a></button>
</div>


<footer class="container-fluid text-center">
    <p>Online Store Copyright</p>
    <form class="form-inline"><?php echo $lang['GET_DEALS']; ?>
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-danger"><?php echo $lang['SIGN_UP']; ?></button>
    </form>
</footer>

</body>
</html>
