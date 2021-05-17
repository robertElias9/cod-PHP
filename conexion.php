<?php
	$host = "localhost";
	$database='crud';
	$user='root';
	$password='';

	$con=mysqli_connect($host,$user,$password);
	mysqli_select_db($con, $database);
?>