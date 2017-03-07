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
    <p>Meie asukoht: </p>

    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <div id='gmap_canvas'></div>
<script type='text/javascript'>
    function init_map(){
        var myOptions = {
            zoom:16,
            center:new google.maps.LatLng(58.37824850000001,26.71467329999996),
            mapTypeId: google.maps.MapTypeId.ROADMAP};
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(58.37824850000001,26.71467329999996)});
        infowindow = new google.maps.InfoWindow({content:'<strong>Predaatori oksjonid</strong><br>Liivi 2, Tartu, Estonia<br>'});
        google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>
<!--    <iframe-->
<!--            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDiDuiPNAgB2mpEUPy6DICNoENp0JLUnig-->
<!--    &q=Raekoja+Plats,Tartu" allowfullscreen>-->
<!--    </iframe>-->
</div>



<footer class="container-fluid text-center">
    <p>Predaator Copyright</p>
</footer>

</body>
</html>

