<?php 

session_start();

$con=new mysqli("localhost","root","","telecom");
if($con->connect_error){
 	die("connectionfailed");
} 

	// include("connection.php");
	// include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) )

        //if condition removed " && !is_numeric($user_name)"
		{

			//read from database
			$query = "select * from admin where email = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['email'] = $user_data['email'];
						header("Location: ad.php");
						die;
					}
				}
			}
			
			echo "<center><h3>Wrong username or password</h3></center>";
		}else
		{
            echo "<center><h3>Wrong username or password</h3></center>";
		}
	}

?>