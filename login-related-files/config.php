<?php

$username = "root";
$password = "";
$db_name = "mysql:host=localhost;dbname=login";

$conn = new PDO($db_name,$username, $password);
	 /*
	// Check connection 
	if ($conn->connect_error) { 
	    die("Connection failed: " . $conn->connect_error); 
	}
	else{
		echo "Connection is successful!";
	}*/
?>