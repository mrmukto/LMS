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
$sql = "INSERT INTO student VALUES(102, 'Sujoy', 'CSE'), (103, 'Mukto', 'EEE')";
if($conn->query($sql) === TRUE){
	echo "Table created successfull";
} else {
	echo "Error creating database: " . $conn->error;
}

$conn->close();

?>