<?php
$servername = "localhost";
$username = "root";
$password = "";

//creat connection
$conn = new mysqli($servername, $username, $password);
//check connection
if($conn->connet_error){
	die("connection failed: " . $conn->connect_error);
}

//creat database
$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === TRUE){
	echo "Database created successfull";
} else {
	echo "Error creating database: " . $conn->error;
}

$conn->close();

?>