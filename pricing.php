<?php

$con=new mysqli("localhost","root","","telecom");


$query1 = mysqli_query($con,'SELECT * from plans where `packet_id`= 123');
$query2 = mysqli_query($con,'SELECT * from plans where `packet_id`= 456');
$query3 = mysqli_query($con,'SELECT * from plans where `packet_id`= 789');

$val1 = mysqli_fetch_array($query1);
$val2 = mysqli_fetch_array($query2);
$val3 = mysqli_fetch_array($query3);



?>





<!DOCTYPE html>
<html
    lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta
    http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta
    name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Comptell Communications</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta
    name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link
    rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link
    rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link
    rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link
    rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link
    rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</html></head><body>

<!-- LOADER -->
<div id="preloader">
    <div class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
    </div>
</div>
<!-- end loader -->
<!-- END LOADER -->

<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="left-top">
                    <div class="email-box">
                        <a href="#">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            comptell@gmail.com</a>
                    </div>
                    <div class="phone-box">
                        <a href="tel:1234567890">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            08300-56890</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="right-top">
                    <div class="social-box">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-rss-square" aria-hidden="true"></i>
                                </a>
                            </li>
                            <ul></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="header header_style_01">
            <nav class="megamenu navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="index.html"><img src="images/logos/logo.png" alt="image"></a> -->
                        <a class="navbar-a" href="index.html"><img src="images/logos/logo.png" alt="image" class="navbar-brand"></a>
                        <h2 class="logo-name">
                            <span class="logo-c">C</span>
                            <span class="omptell">omptell</span>
                        </h2>

                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about-us.html">About us</a>
                            </li>

                            <li>
                                <a href="testimonials.html">Testimonials</a>
                            </li>
                            <li>
                                <a class="active" href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="signup.html">Signup</a>
                            </li>
                            <li>
                                <a href="ad.php">Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="banner-area banner-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner">
                            <h2>Pricing</h2>
                            <ul class="page-title-link">
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Pricing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="about" class="section wb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Pricing</h3>
                    <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers!
                        <br>Let's see what others say about Comptell Solutions website template!</p>
                </div>
                <!-- end title -->
	<form method="POST" action="plans.php">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable" id="pricingtable1">
                            <div class="pricingTable-header">
                                <h3 class="title">Standard</h3>
                                <span class="year">Pay only
                                    <br><?=$val1['price']*12; ?>/year</span>
                            </div>
                            <div class="price-value">
                                <div class="value">
                                    <span class="currency">$</span>
                                    <span class="amount"><?=$val1['price']; ?>
                                    </span>
                                    <span class="month">/month</span>
                                </div>
                            </div>
                            <ul class="pricing-content">
                                <li>50GB Disk Space</li>
                                <li>50 Email Accounts</li>
                                <li>50GB Monthly Bandwidth</li>
                                <li class="disable">10 Subdomains</li>
                                <li class="disable">15 Domains</li>
                            </ul>
                            <button  class="pricingTable-signup" type="submit" name ='basic'>Select the plan
                            </button>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable purple" , id="pricingtable2">
                            <div class="pricingTable-header">
                                <h3 class="title">Business</h3>
                                <span class="year">Pay only
                                    <br><?=$val2['price']*12; ?>/year</span>
                            </div>
                            <div class="price-value">
                                <div class="value">
                                    <span class="currency">$</span>
                                    <span class="amount"><?=$val2['price']; ?>
                                    </span>
                                    <span class="month">/month</span>
                                </div>
                            </div>
                            <ul class="pricing-content">
                                <li>60GB Disk Space</li>
                                <li>60 Email Accounts</li>
                                <li>60GB Monthly Bandwidth</li>
                                <li>15 Subdomains</li>
                                <li class="disable">20 Domains</li>
                            </ul>
                            <button name="business" type="submit" class="pricingTable-signup">Select the plan
                            </button>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable blue" id="pricingtable3">
                            <div class="pricingTable-header">
                                <h3 class="title">Premium</h3>
                                <span class="year">Pay only
                                    <br><?=$val3['price']*12; ?>/year</span>
                            </div>
                            <div class="price-value">
                                <div class="value">
                                    <span class="currency">$</span>
                                    <span class="amount"><?=$val3['price']; ?>
                                    </span>
                                    <span class="month">/month</span>
                                </div>
                            </div>
                            <ul class="pricing-content">
                                <li>70GB Disk Space</li>
                                <li>70 Email Accounts</li>
                                <li>70GB Monthly Bandwidth</li>
                                <li>20 Subdomains</li>
                                <li>25 Domains</li>
                            </ul>
                            <button name="premium" type="submit" class="pricingTable-signup">Select the plan
                            </button>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end section -->
        </form>

        <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_03.jpg');">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Testimonials</h3>
                    <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers!
                        <br>Let's see what others say about Comptell Solutions website template!</p>
                </div>
                <!-- end title -->

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="testi-carousel owl-carousel owl-theme">
                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3>
                                        <i class="fa fa-quote-left"></i>
                                        Wonderful Support!</h3>
                                    <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                                </div>
                                <div class="testi-meta">
                                    <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                    <h4>James Fernando
                                        <small>- Manager of Racer</small>
                                    </h4>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3>
                                        <i class="fa fa-quote-left"></i>
                                        Awesome Services!</h3>
                                    <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                                </div>
                                <div class="testi-meta">
                                    <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                    <h4>Jacques Philips
                                        <small>- Designer</small>
                                    </h4>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3>
                                        <i class="fa fa-quote-left"></i>
                                        Great & Talented Team!</h3>
                                    <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure.
                                    </p>
                                </div>
                                <div class="testi-meta">
                                    <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                    <h4>Venanda Mercy
                                        <small>- Newyork City</small>
                                    </h4>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3>
                                        <i class="fa fa-quote-left"></i>
                                        Wonderful Support!</h3>
                                    <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                                </div>
                                <div class="testi-meta">
                                    <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                    <h4>James Fernando
                                        <small>- Manager of Racer</small>
                                    </h4>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3>
                                        <i class="fa fa-quote-left"></i>
                                        Awesome Services!</h3>
                                    <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                                </div>
                                <div class="testi-meta">
                                    <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                    <h4>Jacques Philips
                                        <small>- Designer</small>
                                    </h4>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3>
                                        <i class="fa fa-quote-left"></i>
                                        Great & Talented Team!</h3>
                                    <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure.
                                    </p>
                                </div>
                                <div class="testi-meta">
                                    <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                    <h4>Venanda Mercy
                                        <small>- Newyork City</small>
                                    </h4>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                        </div>
                        <!-- end carousel -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <hr class="hr1">

                <div class="row logos">
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="uploads/logo_01.png" alt="" class="img-repsonsive"></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="uploads/logo_02.png" alt="" class="img-repsonsive"></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="uploads/logo_03.png" alt="" class="img-repsonsive"></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="uploads/logo_04.png" alt="" class="img-repsonsive"></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="uploads/logo_05.png" alt="" class="img-repsonsive"></a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                        <a href="#"><img src="uploads/logo_06.png" alt="" class="img-repsonsive"></a>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container -->
        </div>
        <!-- end section -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title"></div>
                            <p></p>
                            <p></p>
                        </div>
                        <!-- end clearfix -->
                    </div>
                    <!-- end col -->

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h3>Pages</h3>
                            </div>

                            <ul class="footer-links hov">
                                <li>
                                    <a href="index.html">Home
                                        <span class="icon icon-arrow-right2"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Blog
                                        <span class="icon icon-arrow-right2"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing.html">Pricing
                                        <span class="icon icon-arrow-right2"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="about-us.html">About
                                        <span class="icon icon-arrow-right2"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Faq
                                        <span class="icon icon-arrow-right2"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact
                                        <span class="icon icon-arrow-right2"></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- end links -->
                        </div>
                        <!-- end clearfix -->
                    </div>
                    <!-- end col -->

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-distributed widget clearfix">
                            <div class="widget-title">
                                <h3>Subscribe</h3>
                                <p></p>
                            </div>

                            <div class="footer-right">
                                <form method="get" action="#">
                                    <input placeholder="Subscribe our newsletter.." name="search">
                                    <i class="fa fa-envelope-o"></i>
                                </form>
                            </div>
                        </div>
                        <!-- end clearfix -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- end footer -->

        <div class="copyrights">
            <div class="container">
                <div class="footer-distributed">
                    <div class="footer-left">
                        <p class="footer-company-name">All Rights Reserved. &copy; 2018
                            <a href="#">Comptell Communications</a>
                            Design By :
                            <a href="https://html.design/">html design</a>
                        </p>
                    </div>


                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end copyrights -->

        <a href="#" id="scroll-to-top" class="dmtop global-radius">
            <i class="fa fa-angle-up"></i>
        </a>

        <!-- ALL JS FILES -->
        <script src="js/all.js"></script>
        <!-- ALL PLUGINS -->
        <script src="js/custom.js"></script>
        <script src="js/portfolio.js"></script>
        <script src="js/hoverdir.js"></script>

    </body>
</html></body>
