<?php 

session_start();

if($_SESSION['email']){
    echo "";

}
else{
    header('Location: admin.html');
}

$con=new mysqli("localhost","root","","telecom");

$query = mysqli_query($con,"select * from plans where `packet_id`=123");
$query9 = mysqli_query($con,"select * from plans where `packet_id`=456");
$query8 = mysqli_query($con,"select * from plans where `packet_id`=789");


// $row= mysqli_fetch_row($query);
$val1 = mysqli_fetch_array($query);
$val2 = mysqli_fetch_array($query9);
$val3 = mysqli_fetch_array($query8);


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

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->


    
</head>



<body>

    <!-- LOADER -->
    <!-- <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div> end loader -->
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
                        <li><a href="pricing.php">Pricing</a></li>
						<li><a href="contact.html">Contact</a></li>
                        <li><a href = "signup.html">Signup</a></li>
                        <li><a class="active" href="#">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

	</div>

    <?php

    $con=new mysqli("localhost","root","","telecom");
    if($con->connect_error){
        die("connectionfailed");
    }

    $result = mysqli_query($con,"select * from customer");
    $result1 = mysqli_query($con,"select * from plans");
    



    ?> 


    <center> <h2>Update Customer Details</h2> </center>
    <center>
    <table border="3" >
         <tr>
             <th>Customer_id</th>
             <th>Name</th>
             <th>Email</th>
             <th>reg_date</th>
             <th>Mobile_ph</th>
             <th>home_ph</th>
             <th>Address</th>
             <th>Edit</th>
             <th>Delete</th>
         </tr>





    <?php

    $con=new mysqli("localhost","root","","telecom");


    // $query = mysqli_query($con,"select * from customer");

    $row= mysqli_fetch_row($result);
     
    while ($array = mysqli_fetch_array($result))
    {

        
       echo "<tr>";
       echo "<td>";echo $array['identity_card_no'];echo "</td>";
       echo "<td>";echo $array['name'];echo "</td>";
       echo "<td>";echo $array['email'];echo "</td>";
       echo "<td>";echo $array['registration_date'];echo "</td>";
       echo "<td>";echo $array['mobile_ph'];echo "</td>";
       echo "<td>";echo $array['home_ph'];echo "</td>";
       echo "<td>";echo $array['address'];echo "</td>";
    //    echo "<td>";echo " <button>Edit</button> "; echo "</td>";
       echo "<td>"; ?><a href="cus_edit.php?identity_card_no=<?php echo $array["identity_card_no"]; ?>"> <button type="text/javascript" class='btn btn-primary'>Edit</button><?php echo "</td>" ;
       echo "<td>"; ?><a href="cus_delete.php?identity_card_no=<?php echo $array["identity_card_no"]; ?>"> <button type="text/javascript" class='btn btn-danger'>Delete</button><?php echo "</td>" ;

       echo "</tr>";
    }
?>

</table>

</center>

<br>
<br>

<center>

<h2>Update Pricing </h2>

<div>

<!-- <form action="">
<label for="packet=id">
    Packet id
    <input type="text" name="packet_id" value="">
    <select name="packet_id" id="packet_id">
        <option value="123">Pack 1</option>
        <option value="456">Pack 2</option>
        <option value="789">Pack 3</option>
    </select>
</label>

<label for="packet=id" name = " price" value = "">
    Price
    <input type="text">
</label>

<label for="packet=id">
    Category
    <input type="text" value="">
</label>

</form> -->

<form action="" method='post'>
    <div class="price">
        <h3>Basic Plan</h3>
        <input name='basic' type='number' value="<?php echo $val1['price']; ?>" ></input>
        <br>
        <h3>Business Plan</h3>
        <input name='business' type='number' value="<?php echo $val2['price']; ?>" ></input>    
        <br>
        <h3>Premium Plan</h3>
        <input name='prem' type='number' value="<?php echo $val3['price']; ?>" ></input>    
        <br>
        <br>
        <br>
        <input type="submit" class="price-btn" name='setprice'>

    </div>


    <br>
    <br>
    <br>

    <input type= "submit" name= "log-out" value="Logout" ></input>
</form>




<?php

if(isset($_POST['setprice']))   {
    $pr= mysqli_query($con,"UPDATE plans set price='$_POST[basic]' where packet_id=123");
    $pr1= mysqli_query($con,"UPDATE plans set price='$_POST[business]' where packet_id=456");
    $pr2= mysqli_query($con,"UPDATE plans set price='$_POST[prem]' where packet_id=789");

    ?>
    <script>
        window.location.href=window.location.href;
    </script>

    <?php
}

if(isset($_POST['log-out'])){
    session_unset();
    session_destroy();
    // header('Location: admin.html');

    ?>

    <script>
        window.location.href=window.location.href;
    </script>
    <?php



}


?>


</center>
</div>

    <div id="contact" class="section wb">
        <div class="container">

			<div class="row">
				<div class="col-md-offset-1 col-sm-10 col-md-10 col-sm-offset-1 pd-add">
					<div class="address-item">
						<div class="address-icon">
							<i class="icon icon-location2"></i>
						</div>
						<h3>Headquarters</h3>
						<p>PO Box 574240 Siddhavana 
							<br> Ujire, Karnataka</p>
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
                        <p></p>
                        <p></p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				

            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Comptell Communications</a> Design By :
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

   

</body>
<style>

    
    td,th{
        padding: 5px 40px;
        color: #000;
        text-align: center;

    }  
    
    th{
        padding: 3px 5px;
    }

    .price-btn{
        background-color: rgb(255, 153, 0) ;
        border: 0.3px solid black;
        border-radius: 3px;
        width: 20rem;
        color: #000;
    }
   
    
    .price{

        text-align: center;
    }

    center>h2{
        font-weight: 900;
        padding: 4rem;
    }

    </style>
</html>

