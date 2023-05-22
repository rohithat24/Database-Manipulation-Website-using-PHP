<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "blogs";
	
	echo "Host Name : ",$host, "Database Name : ",$dbName;
	
	echo "<br/>";
	$conn = mysqli_connect($host,$user,$pass,$dbName);
	
	if($conn) {
		echo "Connected Succcessfully";
	} else {
		echo "Connect not successfully";
	}
?>