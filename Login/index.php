<html>
<head>
<style>
	font{
	  background-image: url("back.jpg");
	  text-align: center;
	  font-family: "Arial Black", Gadget, sans-serif;
	  font-weight:bold;
	  font-size:50px;
	  width:100%;
	  padding-top: 15px;
	  padding-bottom: 15px;
	  color:#c9b448;
	}
</style>
<title>Login - Pharmacy Management System</title>
    <link rel="icon" href="favicon.jpg" sizes="16x16" type="image/jpg">
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
	<img src="img1.png" alt="Logo" width="150px" height="120px" align="left"><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pharmacy Management System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/PMS/Home/home.php"><img src="../home.png" alt="Home" width="70px" height="60px"></a>
    <br><br><br>
	
<?php
	if(isset($_SESSION['ID']))
	{
		echo "<h1><center>Already Logged In</center></h1>";
		echo "<script>setTimeout(\"location.href='http://localhost/PMS/Home/home.php';\",2200);</script>";
	}
?>

 <br><br><br>
	
	<div class="loginbox">
    <img src="avatar1.png" class="avatar">
        <h1>System Login</h1>
        <form method="post" action="login.php">
             <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
            <a href="http://localhost/PMS/New/newuser.php">New Employee Registration.</a><br>
            <a href="#">Forgot Password?</a><br>
        </form>
    </div>
</body>
</head>
</html>
