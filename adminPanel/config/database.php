<?php

	/*
	 * The Database File
	*/
// Database Server Name
$servername = "localhost";

// Database Username
$username = "u950092599_july_flipindia";

// Database password
$password = "Flipindia@#123@#";


// Database Name
$dbname = "u950092599_july_flipindia";


// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
//if(!$conn)
{
//	echo "<script> alert ('Database Error ');</script>";
}
// Create connection


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 
	
