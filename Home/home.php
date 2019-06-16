<html>
<head>
<title>Pharmacy Management System </title>
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
footer {
  width: 100%;
  color:white;
  padding: 5;
  background-image: url("../back.jpg");
}
body {
	background-color:#ebffc1;
}
.container {
  position: relative;
  width: 50%;
}
.image {
  display: block;
  backface-visibility: hidden;
  border-width:5px;
  width: 160px;
  height: 160px;
 
}

td{
	width:250px;
	padding:15px 0;
}

tr{
	cellspacing:20px;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 90px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text{
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.fa:{
  Padding: 15px;
  font-size: 30px;
  color: #FFF;
}
.fa:hover {
  color: #D5D5D5;
  text-decoration: none;
}


</style>
</head>
<body>

  <img src="../img1.png" alt="Logo" width="150px" height="120px" align="left"><font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pharmacy Management System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
	<br><br><br><br><br>
      <table align="center">
        <tr>
        <td>  			
         

	<?php 
		session_start();
		if (isset($_SESSION['ID']))
		{
			echo "Welcome ". $_SESSION['name']."<br>";
		}
		
		if (!isset($_SESSION['ID']))
		{  
		  echo '<div class="container">';
          echo '<a href="http://localhost/PMS/Login/index.php"><img src="login1.png" alt="Login" class="image"></a>';
          echo '<div class="middle">';
          echo '<div class="text" >Login</div>';
          echo '</div>';
          echo '</div>';
		}
		else
		{
		  echo '<div class="container">';
          echo '<a href="http://localhost/PMS/Login/logout.php"><img src="logout.jpg" alt="Log out" class="image"></a>';
          echo '<div class="middle">';
          echo '<div class="text" >Log Out</div>';
          echo '</div>';
          echo '</div>';
		}
	?>
		
		  
      </td>
        <td>
          <div class="container">
          <a href="http://localhost/PMS/Update/update.php"><img src="update1.png" alt="Update" class="image">
          <div class="middle">
          <div class="text">Update</div>
          </div>
          </div>
        </td>
        <td>
          <div class="container">
          <a href="http://localhost/PMS/Search/search.php"><img src="search1.png" alt="Search" class="image"></a>
          <div class="middle">
          <div class="text">Search</div>
          </div>
          </div>
        </td>
        </tr>
        <tr>
        <td>
          <div class="container">
          <a href="http://localhost/PMS/Billing/invoice_list.php"><img src="billing2.png" alt="Bill" class="image" >
          <div class="middle">
          <div class="text">Bill</div>
          </div>
          </div>
        </td>
        <td>
          <div class="container">
          <img src="report1.png" alt="Report" class="image" >
          <div class="middle">
          <div class="text">Report</div>
          </div>
          </div>
        </td>
        <td>
          <div class="container">
          <img src="notification1.png" alt="Notification"  class="image" >
          <div class="middle">
          <div class="text">Notifications</div>
          </div>
          </div>
        </td>
        </tr>
      </table>

	<br><br><br>
    <footer class="container-fluid" style="text-align:center;">
    	<div class="row">
    		<div class="col-5m-4">
    			<h3>Contact Us</h3>
    			<br>
    			<h4>Our address and contact info here.</h4>
    		</div>
    		<div class="col-5m-4">
    			<h3>Visit SCET</h3>
    			<a href="https://www.facebook.com/" class="fa fa=facebook"></a>
    			<a href="#" class="fa fa=twitter" alt="twitter"></a>
    			<a href="#" class="fa fa=google"></a>
    			<a href="#" class="fa fa=linkedin"></a>
    			<a href="#" class="fa fa=youtibe"></a>
    		</div>
    		<div class="col-sm-4">
    			<img src="..\img1.png" class="icon">
    		</div>
    	</div>
    </footer>
</body>
</html>
