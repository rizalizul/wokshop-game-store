<?php 
	$host		= "localhost";
	$username	= "root";
	$password	= "";
	$db			= "db_wokshop";

	$con = mysqli_connect($host, $username, $password, $db) or die(mysql_error());
	mysqli_select_db($con,$db);
?>