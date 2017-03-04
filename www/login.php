<?php
/**
 * Created by PhpStorm.
 * User: Germo
 * Date: 03/03/2017
 * Time: 21:15
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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
            <a class="navbar-brand" href="index.php">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <!-- Log in part  -->
        <div class="col-sm-6">
            <form>
                <legend>Logi sisse siin!</legend>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-6">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- register part -->
        <div class="col-sm-6">
            <form class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Pole veel kasutaja?</legend>

                    <!-- First name-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="fn">First name</label>
                        <div class="col-md-4">
                            <input id="fn" name="fn" type="text" placeholder="First name" class="form-control input-md"
                                   required="">

                        </div>
                    </div>

                    <!-- last name-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ln">Last name</label>
                        <div class="col-md-4">
                            <input id="ln" name="ln" type="text" placeholder="Last name" class="form-control input-md"
                                   required="">

                        </div>
                    </div>

                    <!-- e-mail /username-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-4">
                            <input id="email" name="email" type="email" placeholder="email"
                                   class="form-control input-md"
                                   required="">

                        </div>
                    </div>

                    <!-- password-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <div class="col-md-4">
                            <input type="password" name="password" id="password" class="form-control input-sm"
                                   placeholder="Password">

                        </div>
                    </div>
                    <!-- confirm password-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <div class="col-md-4">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   class="form-control input-sm" placeholder="Confirm Password">
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="register"></label>
                        <div class="col-md-4">
                            <button id="register" name="register" class="btn btn-primary">Register</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
        </form>

    </div>
</div>
</div>

<footer class="container-fluid text-center">
    <p>Predaator Copyright</p>
</footer>

</body>
</html>
