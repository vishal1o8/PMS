<html>
<title>Login - Pharmacy Management System</title>
<style>
body {
	background-color:#ebffc1;
}

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

.blocks
{
	font-size:20px;
	font-family:"Courier New", Courier, monospace;
	font-weight:bold;
	line-height:65px;
	text-align: center;	
}


input
{
	border-radius:25px 15px;
	float:center-right;
	height:30px;
	padding:10px;
	margin-bottom:5px;
	border-width:3px;
	border-color:green;
}

fieldset
{
	display:inline-block;
}

</style>
<?php
	include '../session.php';
?>
<body>
	<img src="../img1.png" alt="Logo" width="150px" height="120px" align="left"><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pharmacy Management System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/PMS/Home/home.php"><img src="../home.png" alt="Home" width="70px" height="60px"></a>
    <br><br><br>
	<br><br> <div class='blocks'>
	<fieldset>
	<legend align="left">Record</legend>
	<form method="post" action="insert.php">
		Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="name" required>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Generic Name &nbsp;&nbsp;<input type="text" name="generic" required>
		<br>Box Size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="box" required>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batch ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="batchID" required>
		<br>Expire Date&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="expire" required>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="category" required>
		<br>Shelf &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="shelf" required>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="company" required>
		<br>Sale Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" required><br>
		<input type="submit" name="submit" value="Enter" style="width:150px; background-color:#4CAF50;">
	</form>
	</fieldset>
	</div>
</body>
</html>