<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rush_shop";
	$con = mysqli_connect($servername, $username, $password, $dbname);
	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>