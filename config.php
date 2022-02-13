<?php
$servername = "localhost";
$user = "root";
$database = "telecom";
$password = "";

$conn = new mysqli($servername, $user, $password, $database);
if($conn->connect_error){
    die("Connection Error" . $conn->connect_error);
}
?>
