<?php

defined('Title') || define('Title', 'Title Site');
defined('SubTitle') || define('SubTitle', 'SubTitle Site');


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php echo Title; ?></title>

    <link rel="shortcut icon" href="img/favicon.ico" />

    <!--============================================== STYLES ==============================================-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/fontello/fontello.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/hi-icon.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/color.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/sequencejs.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/skeleton.css" />
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

    <div id="loading-mask">
        <div class="loading-img"><img src="images/loading4.gif" alt="teamidea" /></div>
    </div>

    <!--============================================== Body Wrapper ==============================================-->
    <div class="body-wrapper">


        <!--============================================== Nav ==============================================-->
        <nav id="nav" class="nav sliding">
            <div class="container">

                <div class="logo-wrap">
                    <a class="logo" href="#"><img src="img/Jannat ul baqi black.png" alt="teamidea" /></a>
                </div>


                <div class="navopener">

                    <ul class="sf-menu">
                        <li><a href="#" class="scroll">Home</a></li>
                        <li><a href="#" class="scroll">Other Site</a></li>
                    </ul>

                    <!--============================================== Mobile Nav Toggler ==============================================-->
                    <div class="nav-toggle">
                        <a href="#"></a>
                    </div>
                    <!--============================================== /Mobile Nav Toggler ==============================================-->

                </div>

            </div>
        </nav>
        <!--============================================== /Nav ==============================================-->


        <!--============================================== Mobile Menu ==============================================-->
        <div class="mobile-menu">
            <div class="mobile-menu-inner">
                <ul class="menu">
                    <li><a href="#" class="scroll-mobile">Home</a></li>
                    <li><a href="#" class="scroll-mobile">Other Site</a></li>
                </ul>
            </div>
        </div>
        <!--============================================== /Mobile Menu ==============================================-->


        <section class="main-content">


            <div class="container">

                <div class="row">

                    <div class="span9">

                        <section class="post-list">

                            <article class="post">

                                <header>

                                    <span class="custom-date">



                                    </span>

                                    <h1><a href="#"><?php echo Title; ?></a></h1>

                                    <p class="post-meta">

                                        <?php echo SubTitle; ?>

                                    </p>

                                    <div class="clearfix"></div>

                                </header>

                                <div class="post-thumb">

                                    <a href="#"><img src="img/blog_page/large01.jpg" alt="Post title - Image post" /></a>

                                </div>

                                <div class="post-content">

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                </div>

                            </article>

                        </section>

                    </div>

                    <aside class="span3">

                        <div class="widget">

                            <h3>Recent posts</h3>

                            <ul>

                                <li>

                                    <a href="#">Title Post 1</a>
                                </li>

                                <li>

                                    <a href="#">Title Post 2</a>

                                </li>

                                <li>

                                    <a href="#">Title Post 3</a>

                                </li>

                                <li>

                                    <a href="#">Title Post 4</a>

                                </li>

                            </ul>

                        </div>

                    </aside>

                </div>

            </div>

        </section>





        <!--============================================== /Footer ==============================================-->
        <section class="footer p-top-60 p-bottom-60">
            <div class="footer-fixed">
                <div class="logo-footer">
                    <a href="#"><img src="img/Jannat ul baqi.png" alt="teamidea" /></a>
                </div>
                <div class="social-icons">
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-youtube"></i></a>
                    <a href="#"><i class="icon-instagram"></i></a>
                </div>
                <div class="f_text">
                    <p>
                        © 2024 All Rights Reserved.
                    </p>
                </div>
            </div>
        </section>
        <!--============================================== /Footer ==============================================-->

    </div>
    <!--============================================== /Body Wrapper ==============================================-->

    <!-- SCRIPTS -->
    <script type="text/javascript" src="js/1.8.2.min.js"></script>
    <script type="text/javascript" src="js/easing.min.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.26633.js"></script>
    <script type="text/javascript" src="js/sticky.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/spin.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/isotope.min.js"></script>
    <script type="text/javascript" src="js/flexslider-min.js"></script>
    <script type="text/javascript" src="js/easy-pie-chart.js"></script>
    <script type="text/javascript" src="js/waypoints.js"></script>
    <script type="text/javascript" src="js/carouFredSel.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="plugin/jquery.form.js"></script>

    <!--[if lt IE 9]> <script type="text/javascript" src="js/html5.js"></script> <![endif]-->
    <script type="text/javascript" src="js/teamidea.js"></script>
</body>