<style>
h3
{
	color:green;
	
}
</style>

<?php
	include '../db_config.php';
	$conn = OpenCon();
	if (isset($_POST['submit'])) 
	{
		$stmt = $conn->prepare("INSERT INTO medicines VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiissssi", $name, $generic, $box,$batcID,$expire,$slef,$category,$company,$price);

		// set parameters and execute
		$name = $_POST["name"];
		$generic = $_POST["generic"];
		$box=$_POST["box"];
		$batcID=$_POST["batchID"];		
		$expire = $_POST["expire"];
		$slef=$_POST["shelf"];
		$category=$_POST["category"];
		$company=$_POST["company"];
		$price=$_POST["price"];
		$stmt->execute();
		
		echo "<br><br>";
		echo "<h3><center>Record Added Successfully</center></h3>";
		echo "<script>setTimeout(\"location.href='http://localhost/PMS/Home/home.php';\",2200);</script>";
	}
	CloseCon($conn);
?>