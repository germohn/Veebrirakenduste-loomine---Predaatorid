<!DOCTYPE html>
<html lang="en">
<head>
    <title>Predaator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-3.1.1.min.js"></script>
    <script>
        if (typeof jQuery == 'undefined') {
            document.write(unescape("%3Cscript src='/common/js/jquery-3.1.1.min.js' type='text/javascript'%3E%3C/script%3E"));
        }
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="common/js/changewithAJAX.js"></script>
    <script src="common/js/changeImage.js"></script>
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
            </button>
            <a class="navbar-brand" href="index.php">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><?php echo $lang['HOME']; ?></a></li>
                <li class="active"><a href="contact.php"><?php echo $lang['CONTACT']; ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?php echo $lang['YOUR_ACCOUNT']; ?></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span><?php echo $lang['SHOPPING_CART']; ?></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <h2><?php echo $lang['TEAM']; ?></h2>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <h3>Madli Urbanik <br/>
                        <small>madliurbanik@gmail.com</small>
                    </h3>
                </div>
                <div class="col-md-3">
                    <img id="ltpic1" src="common/img/pilt3.jpg" onclick='changeImage("common/img/pilt4.jpg");' alt="vahva elevant" >
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <h3>Germo Hünerson<br/>
                        <small>germohn@gmail.com</small>
                    </h3>
                </div>
                <div class="col-md-3">
                    <img id="ltpic2" src="common/img/pilt1.jpeg" alt="tore zebra">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <h3>Harald Astok <br/>
                        <small>harald@astok.ee</small>
                    </h3>
                </div>
                <div class="col-md-3">
                    <img id="ltpic3" src="common/img/pilt2.jpeg" alt="muhe känguru">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4><?php echo $lang['WHERE']; ?> </h4>

            <script defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC_ve16Vev_0Bh1FDf6IhLFu4p5qwenB2M'></script>
            <div id='gmap_canvas'></div>
            <script src="common/js/map.js" defer></script>
        </div>
    </div>
    <div class="row">
        <form action="pay.php" method="get">
        <div class = "col-sm-4">
            <div class = "row">
                    <h4><?php echo $lang['DONATION']; ?></h4>
            </div>
            <div class = "row">
                <div class = "col-sm-3">
                    <label class="col-sm-2 col-form-label"><?php echo $lang['SUM']; ?>:</label>
                </div>
                <div class = "col-sm-7">
                    <input type="text" name="sum" id ="sum">
                </div>
            </div>
            <div class = "row">
                <button class = "btn" type ="submit"  formaction="pay.php"><?php echo $lang['DONATE']; ?></button>
            </div>

        </div>
        <div class = "col-sm-6">

        </div>
        </form>
    </div>
</div>
<footer class="container-fluid text-center">
    <div id="copyright">
        <p onclick="kasutabAJAXit()">Predaator Copyright</p>

    </div>
</footer>
</body>
</html>

