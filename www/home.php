<?php

session_start();
include 'homeLogic.php';
include 'language.php';

require_once "./common/core/database/dbconnect.php";

$sql = "SELECT COUNT(*) FROM users"

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
    <script src="common/js/changewithAJAX.js"></script>
    <link rel="stylesheet" href="common/css/style.css">
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
            <a class="navbar-brand" href="index.php">Logo</a>
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
                <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> <?= $_SESSION["firstName"] ?>
                    </a>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span><?php echo $lang['SHOPPING_CART']; ?></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="alert"><?= $_SESSION["welcomemsg"] ?></div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $lang['BLACK']; ?></div>
                <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="panel-footer"><?php echo $lang['MOBILES']; ?></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-danger">
                <div class="panel-heading"><?php echo $lang['BLACK']; ?></div>
                <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="panel-footer"><?php echo $lang['MOBILES']; ?></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading"><?php echo $lang['BLACK']; ?></div>
                <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="panel-footer"><?php echo $lang['MOBILES']; ?></div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $lang['BLACK']; ?></div>
                <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="panel-footer"><?php echo $lang['MOBILES']; ?></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $lang['BLACK']; ?></div>
                <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="panel-footer"><?php echo $lang['MOBILES']; ?></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $lang['BLACK']; ?>L</div>
                <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive"
                                             style="width:100%" alt="Image"></div>
                <div class="panel-footer"><?php echo $lang['MOBILES']; ?></div>
            </div>
        </div>
    </div>
</div>
<br><br>

<footer class="container-fluid text-center">
    <div id="copyright">
        <p onclick="kasutabAJAXit()">Predaator Copyright</p>

    </div>
    <form class="form-inline"><?php echo $lang['GET_DEALS']; ?>
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-danger"><?php echo $lang['SIGN_UP']; ?></button>
    </form>
</footer>

</body>
</html>
