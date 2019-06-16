<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="icon" href="favicon.jpg" sizes="16x16" type="image/jpg">
    <link rel="stylesheet" type="text/css" href="style1.css">	
    <script type="text/javascript">
        function validateForm() {
        
            var fullname = document.forms["register"]["fullname"].value;
            var email = document.forms["register"]["email"].value;
            var username = document.forms["register"]["username"].value;
            var password = document.forms["register"]["password"].value;
            var conpassword = document.forms["register"]["conpassword"].value;

            if (password!=conpassword)
            {        
                alert("Confirm Password should match with the Password"); 
                return false; 
            }

        /*var a = document.forms["myform"]["license"].value;
        if (a == "") {
            alert("License must be filled out");
            return false;
         }

        /* var b = document.forms["myform"]["license"].value;
        if (b == "") {
            alert("License must be filled out");
            return false;
         }

         var c = document.forms["myform"]["license"].value;
        if (c == "") {
            alert("License must be filled out");
            return false;
         }

         var d = document.forms["myform"]["license"].value;
        if (d == "") {
            alert("License must be filled out");
            return false;
         }
            var e = document.forms["myform"]["password"].value;
            else if(e.length&amp;lt;6)
            { 
                alert("Password must be at least 6 characters long."); 
                return false; 
            }*/        
            
            //var e = document.forms["myform"]["password"].value;
            //var f = document.forms["myform"]["conpassword"].value;
        }
    </script>
</head>
<body background="bg1.jpg" height="100vh" width="100vh">
	<div class="loginbox" style="padding-top: 160x">
    <img src="avatar1.png" class="avatar">
        <h1>New Employee Registration</h1>
        <form method="post" name="myform" onsubmit="return validateForm()" action="register.php">
            <p>License Number</p>
            <input type="text" name="license" placeholder="Enter License Number">
            <p>First Name</p>
            <input type="text" name="fname" placeholder="Enter First Name" required>
            <p>Last Name</p>
            <input type="text" name="lname" placeholder="Enter Last Name" required>
            <p>Set Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Set Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <p>Confirm Password</p>
            <input type="password" name="conpassword" placeholder="Re-enter Password" required>
            <p>Enter Phone Number</p>
            <input type="text" name="phone" placeholder="Enter Phone Number" required>
            <p>Enter Address</p>
            <input type="text" name="address" placeholder="Enter Address" required>
            <input type="submit" name="submit" value="Submit">
            </form>
    </div>
</body>
</html>