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
                <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $lang['YOUR_ACCOUNT']; ?></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> <?php echo $lang['SHOPPING_CART']; ?></a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <!-- Log in part  -->
        <div class="col-sm-6">
            <form class="form-horizontal">
                <fieldset>
                <legend><?php echo $lang['LOGIN_HERE']; ?> <span title="<?php echo $lang['TOOLTIP3']; ?>"
                                               class="glyphicon glyphicon-info-sign"></span></legend>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"><?php echo $lang['PASSWORD']; ?></label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="inputPassword" placeholder=<?php echo $lang['PASSWORD']; ?>>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-6">
                        <button type="submit" class="btn btn-primary"><?php echo $lang['LOGIN']; ?></button>
                    </div>
                </div>
                </fieldset>
            </form>
        </div>
        <!-- register part -->
        <div class="col-sm-6">
            <form class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend><?php echo $lang['USER']; ?><span title="<?php echo $lang['TOOLTIP1']; ?>"
                                                      class="glyphicon glyphicon-info-sign"></span></legend>

                    <!-- First name-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="fn"><?php echo $lang['FIRST_NAME']; ?></label>
                        <div class="col-md-4">
                            <input id="fn" name="fn" type="text" placeholder="<?php echo $lang['FIRST_NAME']; ?>" class="form-control input-md"
                                   required="">
                        </div>
                    </div>

                    <!-- last name-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ln"><?php echo $lang['LAST_NAME']; ?></label>
                        <div class="col-md-4">
                            <input id="ln" name="ln" type="text" placeholder="<?php echo $lang['LAST_NAME']; ?>" class="form-control input-md"
                                   required="">

                        </div>
                    </div>

                    <!-- e-mail /username-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">E-mail</label>
                        <div class="col-md-4">
                            <input id="email" name="email" type="email" placeholder="E-mail"
                                   class="form-control input-md"
                                   required="">

                        </div>
                    </div>

                    <!-- password-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password"><?php echo $lang['PASSWORD']; ?> <span title="<?php echo $lang['TOOLTIP2']; ?>"
                                                                                            class="glyphicon glyphicon-info-sign"></span> </label>

                        <div class="col-md-4">
                            <input type="password" name="password" id="password" class="form-control input-sm"
                                   placeholder=<?php echo $lang['PASSWORD']; ?>>

                        </div>
                    </div>
                    <!-- confirm password-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password"><?php echo $lang['PASSWORD']; ?></label>
                        <div class="col-md-4">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   class="form-control input-sm" placeholder="<?php echo $lang['CONFIRM']; ?>">
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="register"></label>
                        <div class="col-md-4">
                            <button id="register" name="register" class="btn btn-primary"><?php echo $lang['REGISTER']; ?></button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>

    </div>
</div>

<footer class="container-fluid text-center">
    <p>Predaator Copyright</p>
</footer>

</body>
</html>
