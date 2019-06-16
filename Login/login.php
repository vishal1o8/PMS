<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	//echo "Hie";
	if (isset($_POST['submit'])) 
	{
		if (empty($_POST['username']) || empty($_POST['password'])) 
		{
			$error = "Username or Password is invalid";
		}
		else
		{	
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			include '../db_config.php';
			$conn = OpenCon();
			
			
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
	//		$username = mysqli_real_escape_string($conn,$username);
	//		$password = mysqli_real_escape_string($conn,$password);
			
			// SQL query to fetch information of registerd users and finds user match.
			$sql = "select * from invoice_user where Password='$password' AND Username='$username'";
			$result = $conn->query($sql);
			
			$row = $result->fetch_assoc();
			if ($result->num_rows == 1) 
			{
				$_SESSION['name']=$row['Username'];
				$_SESSION['ID']=$row['ID'];				// Initializing Session
				$_SESSION['user'] = $row['first_name']."".$row['last_name'];
				$_SESSION['address'] = $row['address'];
				$_SESSION['mobile'] = $row['mobile'];
				//$_SESSION['userid'] = $user[0]['id'];
				//$_SESSION['email'] = $user[0]['email'];		
				header("location: http://localhost/PMS/Home/home.php"); // Redirecting To Other Page
			} 
			else 
			{
				$error = "Username or Password is invalid";
				//echo '<script language="javascript">';
				//echo 'alert("Invalid Login Credentials")';
				//echo '</script>';
				//echo "$error";
			}
			CloseCon($conn); // Closing Connection
		}
	}
?>