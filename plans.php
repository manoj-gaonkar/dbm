<?php

// include 'pricing.php';

$plan='';

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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
		<div class="container border-1">
			<br>
			<br>
			<br>
			<center><h1>Select Plan</h1></center>

			<br>
			
		<form action="" method="POST">
			
			<label for='email' class="form-label">Email</label>
			<input id='email' name='email' type='email' class="form-control"/>
			
			<label for='plan' class="form-label">Plan</label>
			<input id='plan' readonly  name='plan' type='text' value="<?=$plan; ?> "  class="form-control"/>
			<br>

			<select name='duration' value='duration' class="form-select">
				<option name='onemonth' value='1_month'> 1 month
				</option>
				<option name='sixmonth' value='6_month'> 6 month
				</option>
				<option name='oneyear' value='1_year'> 1 year
				</option>
				<option name='fiveyear' value='5_year'> 5 year
				</option>
			</select>
			<br>
			<br>
			<input type="submit" name='choose' value="Choose" style="background-color: rgb(248, 159, 58); border: none; border-radius: 15px 0 15px 0; color: #fff; padding: 5px 20px ; font-weight: 500;" />




<?php

$con=new mysqli("localhost", "root","","telecom");
if(isset($_POST['choose'])){



// $var=mysqli_query($con, "SELECT * from `plans` where `category`= '$plan' "); 
// while($row1=mysqli_fetch_array($var)){	
// 	$pkt=$row1['packet_id'];
//  }

$var=mysqli_query($con, "SELECT `packet_id` FROM `plans` WHERE `category`='$_POST[plan]' ");
$na=mysqli_query($con, "SELECT `identity_card_no` FROM `customer` WHERE `email`='$_POST[email]'" );


$car=mysqli_fetch_array($var); 
$man=mysqli_fetch_array($na);
$ar=date('Y-m-d');

// $plan_query = "INSERT INTO `buys`(`id_card_no`,`packet_id`,`plan_name`,`duration`,`purchase_date`) VALUES ($man['identity_card_no'],$car['packet_id'],$plan,'$_POST[duration]',$ar)";

$plan_query = "INSERT INTO `buys` (`id_card_no`,`packet_id`,`plan_name`,`duration`,`purchase_date`) VALUES ('$man[identity_card_no]','$car[packet_id]','$_POST[plan]','$_POST[duration]','$ar')";


$query=mysqli_query($con,$plan_query);



?>

<script>
	window.location.href = 'index.html';
</script> 

<?php


// $query=mysqli_query($con,"INSERT INTO `buys` (`id_card_no`,`packet_id`,`plan_name`,`duration`,`purchase_date`) VALUES (5,123,'Basic',1 month,'2022-02-12' ");


}



?>


		</form>
	</div>



	</body>
</html>


















