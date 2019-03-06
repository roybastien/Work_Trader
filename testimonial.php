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

    if(!$user->data['is_registered']) //Logged into the Site, display User Options not main page
    {
        //echo 'Welcome ' . $user->data['username'];
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
                    <a class=\"page-scroll\" href=\"#about\">About</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#services\">Services</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#portfolio\">Testimonials</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"login.php\">Log In</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"registration.php\">Register</a>
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
                <h1>You must be a Registered User to leave a Testimonial about WorkTrader</h1>
                <hr>
                <p>Once you have registered or logged in, feel free to come back and tell us about your experience</p>
                <a href=\"registration.php\" class=\"btn btn-primary btn-xl page-scroll\">Register</a>
                <a href=\"login.php\" class=\"btn btn-primary btn-xl page-scroll\">Log In</a>
            </div>
        </div>
    </header>
    </body>
    </html>";
    }

    else{


    echo "
     <!DOCTYPE html>
    <html lang=\"en\" xmlns=\"http://www.w3.org/1999/html\">

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
                <div class=\"header-content-inner\">
                    <h1>Write A Testimonial</h1>
                </div>

                <form class=\"form-signin\" method=\"get\" action=\"testimonial.php\" onsubmit=\"return validateForm()\">
                    <input type=\"text\" rows=\"6\" cols=\"60\" name=\"text2\" class=\"form-control\" id=\"text2\" placeholder=\"Testimonial\" required>
                    <br>
                    <input type=\"number\" name=\"rating\" class=\"form-control\" id=\"rating\" placeholder=\"Rating from 1-10\" value=\"\" min=\"1\" max=\"10\" required>
                    <br>

                    <button class=\"btn btn-lg btn-primary btn-block\" name=\"submission\" type=\"submit\">Submit Your Testimonial</button>

                </form>
            <br><br>
        <a href=\"index.php\" class=\"btn btn-primary btn-xl\">Return to the Main Page</a><br><br>
        <a href=\"forums/index.php\" class=\"btn btn-primary btn-xl\">Return to the Forums</a>
                <!--            </div>-->
                <!--            <div class=\"form-group col-lg-3\"></div>-->
            </div>
        </div>
    </header>

    <script>
        function validateForm(){


            else if (text2.valueOf().length >= 1001)
            {
                alert(\"Sorry, your testimonial cannot be more than 1000 characters\");
                return false;
            }
            else if ( /[^0-9]/.test( rating.valueOf() ) )
            {
                alert(\"Sorry, your rating must be numbers only\");
                return false;
            }
            else{
                return true;
            }
        }
    </script>



    <!-- jQuery -->
    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"js/jquery.easing.min.js\"></script>
    <script src=\"js/jquery.fittext.js\"></script>
    <script src=\"js/wow.min.js\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"js/creative.js\"></script>

    </body>

    </html>



    ";
    }

    ?>

