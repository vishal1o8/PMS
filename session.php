<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "invoice";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT * FROM medicines";
	session_start();// Starting Session
	
	// Storing Session
	if(!isset($_SESSION['ID']))
	{
		echo "<h1><center>Please Login In</center></h1>";
		echo "<script>setTimeout(\"location.href='http://localhost/PMS/Home/home.php';\",2200);</script>";
	}
	else
	{
		$user_check=$_SESSION['ID'];
		$sql="select * from invoice_user where ID='$user_check'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$login_session =$row['ID'];
		$conn -> close();
		if(!isset($login_session))
		{
			echo "<h1><center>Please Login In</center></h1>";
			echo "<script>setTimeout(\"location.href='http://localhost/PMS/Home/home.php';\",2200);</script>";
		}
	}
?>