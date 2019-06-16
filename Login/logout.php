<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
	header("Location: http://localhost/PMS/Home/home.php"); // Redirecting To Home Page
}
?>