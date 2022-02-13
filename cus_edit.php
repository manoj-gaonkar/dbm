<?php
$con=new mysqli("localhost","root","","telecom");

$id = $_GET["identity_card_no"];

$result = mysqli_query($con,"SELECT *  from `customer` where `identity_card_no`=$id");

while($row=mysqli_fetch_array($result)){
    $name=$row['name'];
    $email=$row['email'];
    $date=$row['registration_date'];
    $mobile=$row['mobile_ph'];
    $home=$row['home_ph'];
    $address=$row['address'];

}

?>



<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>Comptell Communication </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

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
    </div><!-- end loader -->
    <!-- END LOADER -->

	<div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="left-top">
						<div class="email-box">
							<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> comptell@gmail.com</a>
						</div>
						<div class="phone-box">
							<a href="tel:1234567890"><i class="fa fa-phone" aria-hidden="true"></i> 08300-56890</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="right-top">
						<div class="social-box">
							<ul>
								<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
							<ul>
						</div>
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
                    <a class="navbar-a" href="index.html"><img src="images/logos/logo.png" alt="image" class="navbar-brand"></a>
                    <h2 class="logo-name"> <span class="logo-c">C</span> <span class="omptell">omptell</span> </h2>

                    <!-- <a class="navbar-brand" href="index.html"><img src="images/logos/logo.png" alt="image"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About us</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
						<li><a href="contact.html">Contact</a></li>
                        <li><a class="active" href = "signup.html">Update</a></li>
                        <li><a href="admin.html">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

	</div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Edit </h3>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form" id ="sign_up">
                        <form action=""  method="POST">
      <div class="form-group">
          <div id="message"></div>
        <label for="username">Name</label>
        <input class="form-control" type="text" name="name" id="username" placeholder="Your sweet name" value="<?=$name; ?>" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="james.bond@spectre.com" value="<?=$email; ?>"required />
      </div>
       <!-- <div class="form-group">
        <label for="date">Date</label>
        <input class="form-control" type="date" name="date" id="date" placeholder="date" required />
      </div> -->
       <div class="form-group">
        <label for="email">Mobile</label>
        <input class="form-control" type="tel" minlength="10" maxlength="10" name="mobile" id="email" placeholder="mobile number" value="<?=$mobile; ?>"required />
      </div>
      <div class="form-group">
        <label for="password">Home phone number</label>
        <input class="form-control" type="tel" minlength="10" maxlength="10" name="home_phone" id="password" placeholder="home phone number" value="<?=$home; ?>" required />
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input class="form-control" type="text" name="address" id="address" placeholder="home adress" value="<?=$address; ?>" required />
      </div>
    
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit"  name='register' value="Update" />
          </li>
       
        </ul>
      </div>
    </form>  
                        <div id = "message"></div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

			<div class="row">
				<div class="col-md-offset-1 col-sm-10 col-md-10 col-sm-offset-1 pd-add">
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-location2"></i>
						</div>
						<h3>Headquarters</h3>
						<p>PO Box 574240 Siddhavana 
							<br> Ujire, Karnakata</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<h3>Email Us</h3>
						<p>nachiketh@yourservice.com
							<br>nachiketh@everywhere.com</p>
					</div>
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-headphones"></i>
						</div>
						<h3>Call Us</h3>
						<p>+91 9 8376 6284
							<br>+91 9 8376 6185</p>
					</div>
				</div>
			</div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                          
                        </div>
                        <p> </p>
                        <p></p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pages</h3>
                        </div>

                        <ul class="footer-links hov">
                            <li><a href="index.html">Home <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Blog <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="pricing.html">Pricing <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="about-us.html">About <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Faq <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="contact.html">Contact <span class="icon icon-arrow-right2"></span></a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

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
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Comptell Communication</a> Design By :
					<a href="https://html.design/">html design</a></p>
                </div>


            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>
<style>
    form{
        color:#000 !important;
        font-weight: 600;
        opacity: 1;
    }
    input{
        color:#000 !important;
        opacity: 1;
    }

</style>


<?php

if(isset($_POST['register'])){

$query1= mysqli_query($con,"UPDATE `customer` set `name` = '$_POST[name]',`email`='$_POST[email]',`mobile_ph` = '$_POST[mobile]',`home_ph` = '$_POST[home_phone]',`address` = '$_POST[address]'  where `identity_card_no` = $id ");

?>
<script>
    window.location.href='ad.php';
</script>

<?php
}
?>
</body>
</html>


