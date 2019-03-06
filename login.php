<!--<form method="post" action="forums/ucp.php?mode=login">-->
<!--    <label for="username">Username: </label> <input type="text" name="username" id="username" size="40" /><br /><br />-->
<!--    <label for="password">Password: </label><input type="password" name="password" id="password" size="40" /><br /><br />-->
<!--    <label for="autologin">Remember Me?: </label><input type="checkbox" name="autologin" id="autologin"  /><br /><br />-->
<!--    <input type="submit" value="Log In" name="login" />-->
<!--    <input type="hidden" name="redirect" value="../index.php" />-->
<!--</form>-->
<!---->
<!--<a title="Register" href="forums/ucp.php?mode=register">Register</a>-->

<?php
/**
 * Created by PhpStorm.
 * User: roybastien
 * Date: 4/28/16
 * Time: 4:39 PM
 */

define('IN_PHPBB', true);
$phpbb_root_path = './forums/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Work Trader - Get the Job Done</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Work Trader</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="index.php#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php#services">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php#portfolio">Testimonials</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php#contact">Contact</a>
                </li>
                <li>
                    <a class="page-scroll" href="login.php">Log In</a>
                </li>
                <li>
                    <a class="page-scroll" href="registration.php">Register</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="header-content">

            <div class="header-content-inner">
                <h1>Sign In</h1>

            <form class="form-signin" method="post" action="forums/ucp.php?mode=login">
                <div>
                    <label for="username" class="sr-only" >Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="username" required autofocus>
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>

                    <input type="password" id="password" name="password" class="form-control" placeholder="password" required>
                </div>


                <div class="checkbox">
                    <label>
                        <input name="autologin" id="autologin" type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <input type="hidden" name="redirect" value="../index.php" />
                <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign in</button>
                <br><br>

            </form>
                <a class="btn btn-lg btn-primary" href="index.php">Cancel</a>
            </div>
        </div>
        </div>

</header>


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/creative.js"></script>

</body>

</html>

