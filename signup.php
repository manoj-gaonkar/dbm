<?php

// session_start();

$con=new mysqli("localhost","root","","telecom");
if($con->connect_error){
 	die("connectionfaild");
} 


$name =$_POST["name"];
$email=$_POST["email"];
// $date=$_POST["date"];
$date=date("Y-m-d");

$mphone=$_POST["mobile"];
$phone=$_POST["home_phone"];
$address=$_POST["address"];
$password=$_POST["password"];
$con_password=$_POST["con_password"];

if($password===$con_password){
	$sql = "INSERT INTO Customer(identity_card_no,name,email,registration_date,mobile_ph,home_ph,address,password) values (identity_card_no,'$name','$email','$date','$mphone','$phone','$address','$password')";


	if($con->query($sql) == TRUE){
		echo <<<EOL
		<style>
		#sign_up{
			display : none;
		}
		</style>
		EOL;
		// echo "<center><h3 class = 'signup-done'>Thank you for signing up.</h3></center>";
		header('Location: index.html');
		
	}
	else{
		echo "needs work";
	}
	
	// mysql_query($sql) or die($sql . mysql_error());
	
	
	$con->close();
}
else{
	echo " <h2>Password is not matching.</h2> ";
}

// echo "<p>Firstname= " .$name . "</p>";
// echo "<p>email= " .$email . "</p>";
// echo "<p>phone= " .$phone . "</p>";
// echo "<p>password =" .$password . "</p>";
// echo "<p>con_pass=" .$con_password . "</p>";
// echo "<p>phone= " .$mphone . "</p>";
// echo "<p>address= " .$address . "</p>";
// echo "<p>date= " .$date . "</p>";


?>

<style>
	.signup-done{
		color: #454545;

	}
</style>
