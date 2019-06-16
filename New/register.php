<!DOCTYPE HTML>
<html>
<body>
<?php
 //error_reporting(E_ALL);
//ini_set('display_errors', 1);

include('DBConnection.php'); 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 $inLicense = $_POST["license"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
 $inFirstname = $_POST["fname"];
 $inLastname = $_POST["lname"];
 $inUsername = $_POST["username"];
 $inPassword = $_POST["password"];
 $InPhone = $_POST["phone"];
 $InAddress = $_POST["address"];
  
 //$encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
 
 $stmt = $db->prepare("INSERT INTO INVOICE_USER(LICENSE, USERNAME, PASSWORD, FIRST_NAME , LAST_NAME, MOBILE, ADDRESS) VALUES(?, ?, ?, ?, ?, ?, ?)"); //Fetching all the records with input
 
 $stmt->bind_param("sssssis", $inLicense,$inUsername, $inPassword,$inFirstname, $inLastname, $InPhone,$InAddress); //Where s indicates string type. You can use i-integer
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 if($result > 0)
 {
 	header("location: http://localhost/PMS/Home/home.php"); // user will be taken to the success page
 	echo '<script language="javascript">';
	echo 'alert("Successfully Registered.")';
	echo '</script>';
 }
 else
 {
 echo "Oops. Something went wrong. Please try again"; 
 ?>
 <a href="index.php">Try Login</a>
 <?php 
 }
}
?>
</body> 
</html>