<html>
<title>Search</title>
<style>
font{
  background-image: url("../back.jpg");  
  text-align: center;
  font-family: "Arial Black", Gadget, sans-serif;
  font-weight:bold;
  font-size:50px;
  width:100%;
  padding-top: 15px;
  padding-bottom: 15px;
  color:#c9b448;

}

body {
	background-color:#ebffc1;
}

.search{
	border: 0;
   color: #EEE;
   background: transparent;
   font-size: 20px;
   font-weight: bold;
   padding: 2px 10px;
   -webkit-appearance: none;
   overflow:hidden;
   width:350px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;   
   background: #e5d062 url("select.png") no-repeat scroll 319px center;
}

h3{
	font-family:"Comic Sans";
}

.name{
	border-radius:50px 50px;
	width:350px;
	height:35px;
}

.go{
	border-radius:50px 50px;
	height:35px;
	background-color:#e5d062;
}

</style>
<body>

	<img src="..\img1.png" alt="Logo" width="150px" height="120px" align="left"><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pharmacy Management System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/PMS/Home/home.php"><img src="../home.png" alt="Home" width="70px" height="60px"></a>
	<br><br><br><br><br>
	<form method="post" action="http://localhost/PMS/Search/search_result.php" >
		<center>
		<select class="search" name="search">
		<option value="name">Name</option>
		<option value="company">Company</option>
		</select>&nbsp;&nbsp;&nbsp; 
		<input type="text" name="name" class="name">
		<input type="submit" name="go" value="Go" class="go" >
		</center>
	</form>
	<br><hr>

	<?php
	/*	session_start();
		if(!isset($_SESSION['ID']) || empty($_SESSION['ID']))
		{
			echo "<br>";
			echo "<h3><center>Please Log In First</center></h3>";
			echo "<script>setTimeout(\"location.href='http://localhost/PMS/Home/home.php';\",2200);</script>";
		}
		include 'session_config.php';
		$conn = OpenCon();
        */
		

	?> 

</body>
</html>