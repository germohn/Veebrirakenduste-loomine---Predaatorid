<?php
include 'language.php';
include 'cookie.php';

session_start();
if (!isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] != true) {
    $_SESSION["message"] = "You have to log in";
    header("location: login.php");
}


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
                <li class="active"><a href="#"><?php echo $lang['HOME']; ?></a></li>
                <li><a href="#"><?php echo $lang['PRODUCTS']; ?></a></li>
                <li><a href="#"><?php echo $lang['DEALS']; ?></a></li>
                <li><a href="#"><?php echo $lang['STORES']; ?></a></li>
                <li><a href="#"><?php echo $lang['CONTACT']; ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span
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

        <!-- register part -->
        <div class="col-sm-6">
            <h1>Add new product!</h1>
            <form class="form-horizontal" action="addProduct.php" method="POST">

                <input type="text" name="productName" id="productName" placeholder="Product name" class="form-control input-md" required>
                <input type="text" name="description" id="description" placeholder="Describe the product" class="form-control input-md" required>
                <input type="number" name="price" id="price" placeholder="Price" class="form-control input-md"required>
                <lable>Add picture</lable><input type="file" name="picture" id="picture" accept="image/*" required>
            </form>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Online Store Copyright</p>
    <form class="form-inline"><?php echo $lang['GET_DEALS']; ?>
        <input type="email" class="form-control" size="50" placeholder="E-mail">
        <button type="button" class="btn btn-danger"><?php echo $lang['SIGN_UP']; ?></button>
    </form>
</footer>

</body>
</html>
