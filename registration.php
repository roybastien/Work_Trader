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
include($phpbb_root_path . 'includes/functions_user.' . $phpEx);
include($phpbb_root_path . 'includes/db/mysql.' . $phpEx);
//// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (isset($_GET['username'])) {


// username of the user being added
//    $username = '2Highway of Life';
    $username = $_GET['username'];

// the user’s password, which is hashed before inserting into the database
//$password = 'MyCoMpLeX_PaSsWoRd';
    $password = $_GET['password'];

// an email address for the user
//$email_address = 'my_email@domain_name.tld';
    $email_address = $_GET['email'];

// default is 4 for registered users, or 5 for coppa users.
    $group_id = 4;

// timezone of the user... Based on GMT in the format of '-6', '-4', 3, 9 etc...
    $timezone = '-6';

// two digit default language for this use of a language pack that is installed on the board.
    $language = 'en';

// user type, this is USER_INACTIVE, or USER_NORMAL depending on if the user needs to activate himself, or does not.
// on registration, if the user must click the activation link in their email to activate their account, their account
// is set to USER_INACTIVE until they are activated. If they are activated instantly, they would be USER_NORMAL
//    $user_type = USER_INACTIVE;
    $user_type = USER_NORMAL;

// here if the user is inactive and needs to activate thier account through an activation link sent in an email
// we need to set the activation key for the user... (the goal is to get it about 10 chars of randomization)
// you can use any randomization method you want, for this example, I’ll use the following...
//    $user_actkey = md5(rand(0, 100) . time());
//    $user_actkey = substr($user_actkey, 0, rand(8, 12));

// IP address of the user stored in the Database.
    $user_ip = $user->ip;

// registration time of the user, timestamp format.
    $registration_time = time();


    // Users area of expertise
    //$expertise = 'Electrician';
    $expertise = $_GET['expertise'];

    // City address for the user
//$city = 'Salt Lake City';
    $city = $_GET['city'];

    // State address for the user (2Char)
    //$state = 'UT';
    $state = $_GET['state'];

// inactive reason is the string given in the inactive users list in the ACP.
// there are four options: INACTIVE_REGISTER, INACTIVE_PROFILE, INACTIVE_MANUAL and INACTIVE_REMIND
// you do not need this if the user is not going to be inactive
// more can be read on this in the inactive users section
//    $user_inactive_reason = INACTIVE_REGISTER;

// time since the user is inactive. timestamp.
//    $user_inactive_time = time();



// these are just examples and some sample (common) data when creating a new user.
// you can include any information
    $user_row = array(

        'username'              => $username,
        'user_password'         => phpbb_hash($password),
        'user_email'            => $email_address,
        'group_id'              => (int)$group_id,
        'user_timezone'         => (float) $timezone,
        'user_lang'             => $language,
        'user_type'             => $user_type,
        'user_ip'               => $user_ip,
        'user_regdate'          => $registration_time,
//        'user_actkey'           => $user_actkey,
//        'user_inactive_reason' => $user_inactive_reason,
//        'user_inactive_time' => $user_inactive_time,
    );

// Custom Profile fields, this will be covered in another article.
// for now this is just a stub
// all the information has been compiled, add the user
// the user_add() function will automatically add the user to the correct groups
// and adding the appropriate database entries for this user...
// tables affected: users table, profile_fields_data table, groups table, and config table.
    $user_id = user_add($user_row);

//// Register user...
//$user_id = user_add($user_row, $cp_data);

// If creating the user failed, display an error
    if ($user_id === false) {
        trigger_error('NO_USER', E_USER_ERROR);
    }
    $template->assign_vars(array(
        // If there were any errors, display them, one on each newline.
        'ERROR' => (sizeof($error)) ? implode('<br />', $error) : '',
    ));


$db = new dbal_mysql();
$db->sql_connect('localhost', 'root', '784651594', 'Forums', '', false, false);


    $query = "
        INSERT INTO phpbb_profile_fields_data
        VALUES ($user_id, $db->sql_escape('$expertise'), $db->sql_escape('$city'), $db->sql_escape('$state'))";


    $db->sql_query($query);

//    header("Location: http://uofu-cs4540-11.westus.cloudapp.azure.com/Projects/Work_Trader/forums/index.php"); /* Redirect browser */
//    exit();
    $result=$auth->login($username, $password);

    if ($result['status'] == LOGIN_SUCCESS) {

        header("Location: http://uofu-cs4540-11.westus.cloudapp.azure.com/Projects/Work_Trader/index.php"); /* Redirect browser */
        exit();

    } else {

        echo $user->lang[$result['error_msg']];

    }


}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

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
            <div class="header-content-inner">
                <h1>Registration</h1>
            </div>

                <form class="form-signin" method="get" action="registration.php" onsubmit="return validateForm()">
                        <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
                    <br>
                        <input type="password" name="password" class="form-control" id="password" placeholder="password" required>

                        <input type="password" name="password-confirm" class="form-control" id="password-confirm" placeholder="confirm password"required>

                        <input type="email" name="email" class="form-control" id="email" placeholder="email address" required>
                        <br>

                        <input type="email" name="email-confirm" class="form-control" id="email-confirm" placeholder="confirm email address"  required>
                    <br>
                    <input type="text" name="expertise" class="form-control" id="expertise" placeholder="Expertise" required><br>
                    <input type="text" name="city" class="form-control" id="city" placeholder="City" required><br>
                    <input type="text" name="state" class="form-control" id="state" placeholder="State (2 Letters)" required>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign in</button>
            </form>
            <a class="btn btn-lg btn-primary" href="index.php">Cancel</a>
<!--            </div>-->
<!--            <div class="form-group col-lg-3"></div>-->
        </div>
    </div>
</header>

<script>
    function validateForm(){

        var email=document.getElementById('email').value;
        var email_confirm=document.getElementById("email-confirm").value;

        var password=document.getElementById("password").value;
        var password_confirm=document.getElementById("password-confirm").value;

        var city=document.getElementById("city").value;
        var state=document.getElementById("state").value;

        if(!(email.valueOf() == email_confirm.valueOf())) {
            alert("Sorry, your email addresses don't match.");
            return false;
        }
        else if(!(password.valueOf() ==  password_confirm.valueOf())) {
            alert("Sorry, your passwords don't match.");
            return false;
        }
            else if ( /[^a-zA-Z0-9 ]/.test( city.valueOf() ) )
        {
            alert("Sorry, your city must be alphanumeric");
            return false;
        }
        else if (city.valueOf().length >= 31)
        {
            alert("Sorry, your city name cannot be more than 30 characters");
            return false;
        }
        else if ( /[^A-Z]/.test( state.valueOf() ) )
        {
            alert("Sorry, your State must be capitalized letters only (e.g. UT, NY, CA)");
            return false;
        }
        else if (!(state.valueOf().length == 2))
        {
            alert("Sorry, your State must be exactly 2 letters in length (e.g. UT, NY, CA)");
            return false;
        }

        else{
            return true;
        }
    }
</script>



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

