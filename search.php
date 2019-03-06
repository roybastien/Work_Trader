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

if($user->data['is_registered']) //Logged into the Site, display User Options not main page
{
    echo "

    <!DOCTYPE html>
<html lang=\"en\">

<head>


    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Work Trader - Get the Job Done</title>

    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"font-awesome/css/font-awesome.min.css\" type=\"text/css\">

    <!-- Plugin CSS -->
    <link rel=\"stylesheet\" href=\"css/animate.min.css\" type=\"text/css\">

    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"css/creative.css\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

     <style>
        table {

        }
        tr:hover {background-color: #f5f5f5}
        tr:nth-child(even) {background-color: #f2f2f2}
        tr:nth-child(odd) {background-color: white}
        tr {color: black}
        th {
    background-color: #4CAF50;
    color: white;
    text-align: center;
}

    </style>

</head>

<body id=\"page-top\">

<nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">Work Trader</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a class=\"page-scroll\" href=\"find_trades.php\">Find Traders in your area</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"testimonial.php\">Write A Testimonial</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"forums/index.php\">WorkTrader Forums</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"forums/ucp.php\">"; echo $user->data['username']; echo " Account</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"logout.php?cp=logout\">Log Out</a>
                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class=\"header-content\">
        <div class=\"header-content-inner\">
            <h1>Work Trader Search Results</h1>
            <hr>
            <p>Here are the results of your search, If the table is empty, no results were found with those search criteria</p>
        <div class=\"table-responsive\">
                <table class=\"table\">
                <thead>
                <tr>
                    <th>
                        Username
                    </th>
                    <th>
                        Expertise
                    </th>
                    <th>
                        City
                    </th>
                    <th>
                        State
                    </th>
                </tr>
                </thead>
                <tbody>
                ";




    $b_city = empty($_GET['city']);
    $b_state = empty($_GET['state']);
    //var_dump($b_city);
    //var_dump($b_state);
        if (!isset($_GET['city'])) {
            header("Location: http://uofu-cs4540-11.westus.cloudapp.azure.com/Projects/Work_Trader/index.php"); /* Redirect browser */
            exit();
        }
        // username of the user being added

        $uid = $user->data['user_id'];

        $city = $_GET['city'];
        $state = $_GET['state'];

        $db = new dbal_mysql();
        $db->sql_connect('localhost', 'root', '784651594', 'Forums', '', false, false);


            $query = "SELECT `phpbb_profile_fields_data`.`user_id`,
        `phpbb_users`.`username`,
        `phpbb_profile_fields_data`.`pf_expertise`,
        `phpbb_profile_fields_data`.`pf_city`,
        `phpbb_profile_fields_data`.`pf_state` FROM `phpbb_users` JOIN `phpbb_profile_fields_data` WHERE (phpbb_users.user_id = phpbb_profile_fields_data.user_id AND
        ";
        //var_dump($query);
        if ($b_city == 0) {
            $query .= "pf_city COLLATE UTF8_GENERAL_CI LIKE $db->sql_escape('$city')";
            //var_dump($query);
            if ($b_state == 0) {
                $query .= " AND pf_state COLLATE UTF8_GENERAL_CI LIKE $db->sql_escape('$state')";
            }
        } else if ($b_state == 0) {
            $query .= "pf_state COLLATE UTF8_GENERAL_CI LIKE $db->sql_escape('$state')";
        }
        $query .= " AND phpbb_users.user_id != $db->sql_escape($uid))";

//WARNING!!!! should bind first and last and id!!! Read up on this!!!
        $result = $db->sql_query($query);
    while ($row = $db->sql_fetchrow($result))
    {
        $uname = $row['username'];
        $userid = $row['user_id'];
        $expertise = $row['pf_expertise'];
        $t_city = $row['pf_city'];
        $t_state = $row['pf_state'];
        echo "<tr>
                <td><a href='forums/ucp.php?i=pm&mode=compose&u=$userid&subject=I%20Would%20Like%20To%20Make%20A%20WorkTrade%20With%20You!'>$uname</a></td>
                <td>$expertise</td>
                <td>$t_city</td>
                <td>$t_state</td>
             </tr>";
    }

    echo "
            </tbody>
            </table>
            </div>
            <br><br>
        <a href=\"index.php\" class=\"btn btn-primary btn-xl\">Return to the Main Page</a><br><br>
        <a href=\"forums/index.php\" class=\"btn btn-primary btn-xl\">Return to the Forums</a>
    </div>
    </div>
    </div>
</header>

    ";

}
else
{
    header("Location: http://uofu-cs4540-11.westus.cloudapp.azure.com/Projects/Work_Trader/registration.php"); /* Redirect browser */
    exit();
}