<style>

.blocks
{
	font-size:20px;
	font-family:"Courier New", Courier, monospace;
	background-image:url("div.jpg");
	font-weight:bold;
}

</style>

<?php
		include '..\db_config.php';
		include 'C:\xampp\htdocs\PMS\Search\search.php';
		$conn = OpenCon();
		if(isset($_POST['go']))
		{
			$name = $_POST['name'];
			$options=$_POST['search'];
		}	
		$sql = "SELECT * FROM medicines where $options='$name'";
		$result = $conn->query($sql);
?>

<style>

input
{
	border-radius:25px 15px;
	float:center-right;
	height:30px;
	padding:10px;
	margin-bottom:5px;
}

h2
{
	color:#c41613;
}

</style
<?php
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
				echo "<br><br> <div class='blocks'>";
				echo 'Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"  readonly value='.$row['name'].'>';
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
				echo 'Generic Name &nbsp; <input type="text" readonly value='.$row['genericName'].'>';
				
				echo '<br>Box Size &nbsp;&nbsp;&nbsp;&nbsp; <input type="text"  readonly value='.$row['boxSize'].'>';
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
				echo 'Batch Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" readonly value='.$row['batchId'].'>';
				
				echo '<br>Expire Date &nbsp; <input type="text"  readonly value='.$row['expireDate'].'>';
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
				echo 'Category &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" readonly value='.$row['category'].'>';
				
				echo '<br>Shelf &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"  readonly value='.$row['shelf'].'>';
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
				echo 'Company &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" readonly value='.$row['Company'].'>';
				
				echo '<br>Sale Price &nbsp;&nbsp; <input type="text"  readonly value=Rs&nbsp;'.$row['salePrice'].'>';
				
				echo "</div>";
			}
		} 
		else 
		{
			echo "<br><br><h2><center>No result</center></h2>";
		}
		CloseCon($conn);
?> 