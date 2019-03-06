<?php
define('IN_PHPBB', true);
$phpbb_root_path = './forums/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();
?>
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Work Trader - Legal</title>

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

    <style>
        header {
            width:100%;
            height:475px;
            background-image: url("img/legalbg.jpg");
            background-size:cover;
        }


    </style>
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
            <a class="navbar-brand page-scroll" href="http://uofu-cs4540-11.westus.cloudapp.azure.com/Projects/Work_Trader/">Work Trader</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Testimonials</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
                <li>
                    <a class="page-scroll" href="login.php">Log In</a>
                </li>
                <li>
                    <a class="page-scroll" href="tests/login.php">Test Log In</a>
                </li>
                <li>
                    <a class="page-scroll" href="logout.php?cp=logout">Log Out</a>
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
            <h1>Work Trader</h1>
            <hr>
            <p>Work Trader is not responsible for the work being traded.  The rating system is in place to better help you find quality users to trade with.</p>
            <a href="#legal" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
        </div>
    </div>
</header>

<section class="bg-primary" id="legal">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">
                    Web Site Terms and Conditions of Use
                </h2>

                <h3 class="light">
                    1. Terms
                </h3>

                <p class="text-faded">
                    By accessing this web site, you are agreeing to be bound by these
                    web site Terms and Conditions of Use, all applicable laws and regulations,
                    and agree that you are responsible for compliance with any applicable local
                    laws. If you do not agree with any of these terms, you are prohibited from
                    using or accessing this site. The materials contained in this web site are
                    protected by applicable copyright and trade mark law.
                </p>

                <h3 class="light">
                    2. Use License
                </h3>

                <ol>
                    <li>
                        Permission is granted to temporarily download one copy of the materials
                        (information or software) on WorkTrader's web site for personal,
                        non-commercial transitory viewing only. This is the grant of a license,
                        not a transfer of title, and under this license you may not:

                        <ul class="unstyled">
                            <li>modify or copy the materials;</li>
                            <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                            <li>attempt to decompile or reverse engineer any software contained on WorkTrader's web site;</li>
                            <li>remove any copyright or other proprietary notations from the materials; or</li>
                            <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                        </ul>
                    </li>
                    <li>
                        This license shall automatically terminate if you violate any of these restrictions and may be terminated by WorkTrader at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
                    </li>
                </ol>

                <h3 class="light">
                    3. Disclaimer
                </h3>

                <ol type="a">
                    <li>
                        The materials on WorkTrader's web site are provided "as is". WorkTrader makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, WorkTrader does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.
                    </li>
                </ol>

                <h3 class="light">
                    4. Limitations
                </h3>

                <p class="text-faded">
                    In no event shall WorkTrader or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on WorkTrader's Internet site, even if WorkTrader or a WorkTrader authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
                </p>

                <h3 class="light">
                    5. Revisions and Errata
                </h3>

                <p class="text-faded">
                    The materials appearing on WorkTrader's web site could include technical, typographical, or photographic errors. WorkTrader does not warrant that any of the materials on its web site are accurate, complete, or current. WorkTrader may make changes to the materials contained on its web site at any time without notice. WorkTrader does not, however, make any commitment to update the materials.
                </p>

                <h3 class="light">
                    6. Links
                </h3>

                <p class="text-faded">
                    WorkTrader has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by WorkTrader of the site. Use of any such linked web site is at the user's own risk.
                </p>

                <h3 class="light">
                    7. Site Terms of Use Modifications
                </h3>

                <p class="text-faded">
                    WorkTrader may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.
                </p>

                <h3 class="light">
                    8. Governing Law
                </h3>

                <p class="text-faded">
                    Any claim relating to WorkTrader's web site shall be governed by the laws of the State of Utah without regard to its conflict of law provisions.
                </p>

                <p class="text-faded">
                    General Terms and Conditions applicable to Use of a Web Site.
                </p>



                <h2 class="section-heading">
                    Privacy Policy
                </h2>

                <p class="text-faded">
                    Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.
                </p>

                <ul class ="text-faded">
                    <li>
                        Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.
                    </li>
                    <li>
                        We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.
                    </li>
                    <li>
                        We will only retain personal information as long as necessary for the fulfillment of those purposes.
                    </li>
                    <li>
                        We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.
                    </li>
                    <li>
                        Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.
                    </li>
                    <li>
                        We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.
                    </li>
                    <li>
                        We will make readily available to customers information about our policies and practices relating to the management of personal information.
                    </li>
                </ul>

                <p class="text-faded">
                    We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.
                </p>


            </div>
        </div>
    </div>
</section>


<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Need a little help or don't quite know if this is a good idea.  Don't worry, give us a shout!</p>
                <a href="legal.php">Legal</a>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x wow bounceIn"></i>
                <p style="color: #539550">123-456-6789</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                <p><a href="mailto:your-email@your-domain.com">help@work-trader.com</a></p>
            </div>
        </div>
    </div>
</section>

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
