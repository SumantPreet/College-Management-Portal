<?php
	//Enter Your Mysql Username
		$username = "root";
	//Enter Your Mysql Password
		$password = "123456";
		
		$server = "localhost";
		$dbname = "apna";

		$conn = mysqli_connect($server, $username, $password, $dbname);
		
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
?>
