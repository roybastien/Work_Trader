<?php
define('IN_PHPBB', true);
$phpbb_root_path = './forums/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if($user->data['is_registered']) //Logged into the Site, display User Options not main page
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
            <h1>Work Trader</h1>
            <hr>
            <p>Thank you for logging in to WorkTrader</p>
            <a href=\"find_trades.php\" class=\"btn btn-primary btn-xl page-scroll\">Search For Trades</a>
        </div>
    </div>
</header>

<section class=\"bg-primary\" id=\"about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <h2 class=\"section-heading\">Welcome "; echo $user->data['username']; echo " </h2>
                <hr class=\"light\">
                <p class=\"text-faded\"></p>
                <a href=\"forums/index.php\" class=\"btn btn-default btn-xl\">Go to the WorkTrader Forums</a><br><br>
                <a href=\"forums/ucp.php\" class=\"btn btn-default btn-xl\">Go to "; echo $user->data['username']; echo "'s Account Page</a><br><br>
                <a href=\"testimonial.php\" class=\"btn btn-default btn-xl\">Leave a Testimonial about WorkTrader</a><br><br>
            </div>
        </div>
    </div>
</section>


            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <h2 class=\"section-heading\">Let's Get In Touch!</h2>
                <hr class=\"primary\">
                <p>Need a little help or don't quite know if this is a good idea.  Don't worry, just <a href=\"mailto:help@work-trader.com?subject=Help%20With%20WorkTrader!\">give us a shout!</a></p> <!--Not an actual email address we have access to-->
                <p>By using the WorkTrader website you agree to the WorkTrader <a href=\"legal.php\">Legal Terms of Service</a></p>
            </div>
            <div class=\"col-lg-4 col-lg-offset-2 text-center\">
                <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
                <p style=\"color: #539550\">123-456-6789</p>
            </div>
            <div class=\"col-lg-4 text-center\">
                <i class=\"fa fa-envelope-o fa-3x wow bounceIn\" data-wow-delay=\".1s\"></i>
                <p><a href=\"mailto:your-email@your-domain.com\">help@work-trader.com</a></p>
            </div>
        </div>
    </div>
</section>

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

else
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
            <h1>Work Trader</h1>
            <hr>
            <p>Work Trader helps you connect with people around you so that you can get things done without paying a dime.</p>
            <a href=\"#about\" class=\"btn btn-primary btn-xl page-scroll\">Find Out More</a>
        </div>
    </div>
</header>

<section class=\"bg-primary\" id=\"about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <h2 class=\"section-heading\">We can help!</h2>
                <hr class=\"light\">
                <p class=\"text-faded\">At Work Trader we have a huge network of qualified professionals willing to work for you! All you need to do is sign up, fill out your personalized skill sets you're willing to perform and you're ready to start trading work!</p>
                <a href=\"registration.php\" class=\"btn btn-default btn-xl\">Get Started!</a>
            </div>
        </div>
    </div>
</section>

<section id=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">We're All At Your Service</h2>
                <hr class=\"primary\">
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 text-center\">
                <div class=\"service-box\">
                    <i class=\"fa fa-4x fa-money wow bounceIn text-primary\"></i>
                    <h3>Saving Money</h3>
                    <p class=\"text-muted\">Our network of professionals can help save you a ton of money.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 text-center\">
                <div class=\"service-box\">
                    <i class=\"fa fa-4x fa-plane wow bounceIn text-primary\" data-wow-delay=\".1s\"></i>
                    <h3>No need to travel</h3>
                    <p class=\"text-muted\">Have a skill you can perform remotely? Connect with people across the world.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 text-center\">
                <div class=\"service-box\">
                    <i class=\"fa fa-4x fa-automobile wow bounceIn text-primary\" data-wow-delay=\".2s\"></i>
                    <h3>Up to Date</h3>
                    <p class=\"text-muted\">From mechanics to wedding photographers, we've got professionals in every field.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 text-center\">
                <div class=\"service-box\">
                    <i class=\"fa fa-4x fa-briefcase wow bounceIn text-primary\" data-wow-delay=\".3s\"></i>
                    <h3>Made with Love</h3>
                    <p class=\"text-muted\">Every agreement is backed up by a contract so you don't have to worry.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"no-padding\" id=\"portfolio\">
            <div class=\"container-fluid\">
                <div class=\"row no-gutter\">
                    <div class=\"col-lg-4 col-sm-6\">
                        <a href=\"#\" class=\"portfolio-box\">
                            <img src=\"img/portfolio/scissors.jpg\" class=\"img-responsive\" alt=\"\">
                            <div class=\"portfolio-box-caption\">
                                <div class=\"portfolio-box-caption-content\">
                                    <div class=\"project-name\">
                                        \"My business makes jeans and I was able to trade some to have the sink fixed in my shop.\" - Nancey
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a href=\"#\" class=\"portfolio-box\">
                    <img src=\"img/portfolio/sprinkler.jpg\" class=\"img-responsive\" alt=\"\">
                    <div class=\"portfolio-box-caption\">
                        <div class=\"portfolio-box-caption-content\">
                            <div class=\"project-name\">
                                \"A man installed the sprinkler system at my daughter's house in exchange for my husband designing an advertisement for his business.\" - Mary
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a href=\"#\" class=\"portfolio-box\">
                    <img src=\"img/portfolio/handy.jpg\" class=\"img-responsive\" alt=\"\">
                    <div class=\"portfolio-box-caption\">
                        <div class=\"portfolio-box-caption-content\">
                            <div class=\"project-name\">
                                \"I changed the locks on a family's house in exchange for some babysitting time.  Our kids are even friends now!\" - Nathan
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a href=\"#\" class=\"portfolio-box\">
                    <img src=\"img/portfolio/mechanic.jpg\" class=\"img-responsive\" alt=\"\">
                    <div class=\"portfolio-box-caption\">
                        <div class=\"portfolio-box-caption-content\">
                            <div class=\"project-name\">
                                \"I a car enthusiast and so I rebuilt a man's highschool Beetle.  He built the deck at my new townhouse!\" - Daniel
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a href=\"#\" class=\"portfolio-box\">
                    <img src=\"img/portfolio/woodworking.jpg\" class=\"img-responsive\" alt=\"\">
                    <div class=\"portfolio-box-caption\">
                        <div class=\"portfolio-box-caption-content\">
                            <div class=\"project-name\">
                                \"As a retired school teacher I don't have a lot of money.  It's nice to use my woodworking hobby to trade for things that I need to have done.\" - Walter
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a href=\"#\" class=\"portfolio-box\">
                    <img src=\"img/portfolio/laptopcode.jpg\" class=\"img-responsive\" alt=\"\">
                    <div class=\"portfolio-box-caption\">
                        <div class=\"portfolio-box-caption-content\">
                            <div class=\"project-name\">
                                \"I was able to make a simple bootstrap website in a couple of days and I got an electrician to rewire my whole house! That was the easiest job trade ever!\" - William
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<aside class=\"bg-dark\">
    <div class=\"container text-center\">
        <div class=\"call-to-action\">
            <h2>Get started at Work Trader Now!</h2>
            <a href=\"#\" style=\"background-color: #539550\" class=\"btn btn-default btn-lg wow tada\">Get Started!</a>
        </div>
    </div>
</aside>

<section id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <h2 class=\"section-heading\">Let's Get In Touch!</h2>
                <hr class=\"primary\">
                <p>Need a little help or don't quite know if this is a good idea.  Don't worry, give us a shout!</p>
                <p>By using the WorkTrader website you agree to the WorkTrader <a href=\"legal.php\">Legal Terms of Service</a></p>
            </div>
            <div class=\"col-lg-4 col-lg-offset-2 text-center\">
                <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
                <p style=\"color: #539550\">123-456-6789</p>
            </div>
            <div class=\"col-lg-4 text-center\">
                <i class=\"fa fa-envelope-o fa-3x wow bounceIn\" data-wow-delay=\".1s\"></i>
                <p><a href=\"mailto:your-email@your-domain.com\">help@work-trader.com</a></p>
            </div>
        </div>
    </div>
</section>

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

