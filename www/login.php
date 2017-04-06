<?php
session_start();

require_once 'loginLogic.php';


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
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="219257428738-k5qtb4lcf0lqf5b15qkr1uve5auv1vfu.apps.googleusercontent.com">

    <script src="https://apis.google.com/js/platform.js" async defer></script>

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
        <div class="col-sm-6">
            <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
            <script>
                function onSignIn(googleUser) {
                    // Useful data for your client-side scripts:
                    var profile = googleUser.getBasicProfile();
                    console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                    console.log('Full Name: ' + profile.getName());
                    console.log('Given Name: ' + profile.getGivenName());
                    console.log('Family Name: ' + profile.getFamilyName());
                    console.log("Image URL: " + profile.getImageUrl());
                    console.log("Email: " + profile.getEmail());

                    // The ID token you need to pass to your backend:
                    var id_token = googleUser.getAuthResponse().id_token;
                    console.log("ID Token: " + id_token);
                    <?phpheader('Location: home.php');
                     $_SESSION["loggedIn"] = true;
                     ?>

                };
            </script>
        </div>

    </div>
</div>

<footer class="container-fluid text-center">
    <p>Predaator Copyright</p>
</footer>

</body>
</html>
