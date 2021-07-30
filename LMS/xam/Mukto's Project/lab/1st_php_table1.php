<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//creat connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn->connet_error){
	die("connection failed: " . $conn->connect_error);
}

//creat database
$sql = "CREATE TABLE Student(ID int primary key, Name varchar(25), Department varchar(20))";
if($conn->query($sql) === TRUE){
	echo "Table created successfull";
} else {
	echo "Error creating database: " . $conn->error;
}

$conn->close();

?>