<?php

if(isset($_POST['basic'])){
	$plan='Basic';
}
else if(isset($_POST['business'])){
	$plan='Business';
}

else if(isset($_POST['premium'])){
	$plan='Premium';
}

?>
<!DOCTYPE>
<html>
	<head>
	</head>
	<body>
		<form action="" method="POST">
			<label for='email'>email</label>
			<input id='email' name='email' type='email'/>
			
			<label for='plan'>Plan</label>
			<input id='plan' disabled  name='email' type='text' value="<?=$plan; ?>"/>
			<select name='duration'>
			<option name='onemonth' value='1_month'> 1 month
			</option>
			<option name='sixmonth' value='6_month'> 6 month
			</option>
			<option name='oneyear' value='1_year'> 1 year
			</option>
			<option name='fiveyear' value='5_year'> 5 year
			</option>
			<br>
			<br>
			<input type="button" name='choose' value="choose" />
		</form>
	</body>

<?php

$con=new mysqli("localhost", "root","","telecom");
if (isset($_POST['choose'])){

$var=mysqli_query($con, 'select `packet_id` from `plans` where `category`=$plan  ');
$na=mysqli_query($con, "select `identity_card_no` from `customer` where `email`='$_POST[email]'");

$car=mysqli_fetch_array($var); 
$man=mysqli_fetch_array($na);
echo $man['identity_card_no'];
$ar=date("Y-m-d");
echo $car['packet_id'];
$query=mysqli_query($con,"INSERT INTO `buys`(`id_card_no`,`packet_id`,`plan_name`,`duration`,`purchase_date`) VALUES ($man['identity_card_no'],$car['packet_id'],$plan,'$_POST[duration]',$ar)");

?>

<?php


}



?>








</html>


















