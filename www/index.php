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
    <script src="common/js/changewithAJAX.js"></script>
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
            <a class="navbar-brand" href="index.php">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><?php echo $lang['HOME']; ?></a></li>
                <li><a href="contact.php"><?php echo $lang['CONTACT']; ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?php echo $lang['YOUR_ACCOUNT']; ?></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span><?php echo $lang['SHOPPING_CART']; ?></a></li>
                <li><a href="?lang=et"><img class="lang_img" src="common/img/estonia_640.png" alt="eesti"></a></li>
                <li><a href="?lang=en"><img class="lang_img" src="common/img/united_kingdom_640.png" alt="inglise"></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <h2><p><?php echo $lang['WELCOME']; ?></p></h2>
        <div class="col-sm-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="common/img/i_view64_2017-02-16_13-53-18.png" alt="shop-image">
                        <div class="carousel-caption">
                            <h3><?php echo $lang['CASH']; ?></h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src="common/img/predatorInAction.jpg" alt="predator-Image">
                        <div class="carousel-caption">
                            <h3><?php echo $lang['MORE']; ?></h3>
                            <p><?php echo $lang['LOREM']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="well">
                <p><?php echo $lang['SOON']; ?></p>
            </div>
            <div class="well">
                <p><?php echo $lang['EVENT']; ?></p>
            </div>
            <div class="well">
                <p><?php echo $lang['BLOG']; ?></p>
            </div>
        </div>
    </div>
    <hr>
</div>

<footer class="container-fluid text-center">

    <div id="copyright">
        <p onclick="kasutabAJAXit()">Predaator Copyright</p>

    </div>


</footer>

</body>
</html>
