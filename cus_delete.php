<?php
$con=new mysqli("localhost","root","","telecom");


$id = $_GET["identity_card_no"];


$result = mysqli_query($con,"DELETE  from `customer` where `identity_card_no`=$id");
header('Location:ad.php');

?>