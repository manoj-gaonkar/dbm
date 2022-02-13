<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "telecom");

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$f_name = $_POST["first_name"];
$l_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$comment = $_POST["comments"];

echo "<pre><p>First Name : " . $f_name . "</p></pre>";
echo "<pre><p>Last Name  : " . $l_name . "</p></pre>";
echo "<pre><h6>Email      : " . $email . "</h6></pre>";
echo "<pre><p>Phone no   : " . $phone . "</p></pre>";
echo "<pre><p>Comment    : " . $comment . "</p></pre>";
$sql = "INSERT INTO `contact` (`first_name`, `last_name`, `email`, `phone_num`, `comment`) VALUES ('$f_name', '$l_name', '$email', '$phone','$comment');";
if ($conn->query($sql) == TRUE) {
  print<<<EOL
  <style>
  #contactform{
    display : none;
  }
  </style>
  <div> <h3>Thank you, We'll reach you as soon as we can.</h3></div>
  EOL;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
