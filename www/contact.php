<!DOCTYPE html>
<html lang="en">
<head>
    <title>Predaator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="jumbotron">
    <div class="container text-center">
        <h1>Predaator ja Tulnukas</h1>
        <p>Osta ja Müü vana kraami</p>
    </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">PANE Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <h2> Predaatori tiim: </h2>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <h3>Madli Urbanik <br/>
                        <small>madliurbanik@gmail.com</small>
                    </h3>
                </div>
                <div class="col-md-3">
                    <img class="ltpic" src="pilt3.jpg" alt="vahva elevant">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <h3>Germo Hünerson<br/>
                        <small>germohn@gmail.com</small>
                    </h3>
                </div>
                <div class="col-md-3">
                    <img class="ltpic" src="pilt1.jpeg" alt="tore zebra">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <h3>Harald Astok <br/>
                        <small>harald@astok.ee</small>
                    </h3>
                </div>
                <div class="col-md-3">
                    <img class="ltpic" src="pilt2.jpeg" alt="muhe känguru">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4>Predaatori oksjonid leiad: </h4>

            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
            <div id='gmap_canvas'></div>
            <script src="map.js" defer></script>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Predaator Copyright</p>
</footer>
</body>
</html>

