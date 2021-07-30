<?php
$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "resister";

$errors= array();


$user= $_POST["username"];
$email= $_POST["email"];
$pass1= $_POST["password_1"];
$pass2= $_POST["password_2"];

// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(empty($user))
{
array_push($errors, "Username is required");
}

if(empty($email))
{
array_push($errors, "email is required");
}

if(empty($pass1))
{
array_push($errors, "password is required");
}

if($pass1 != $pass2)
{
array_push($errors, "Two password do not match");
}


if(count($errors)==0)
{
$sql = "INSERT INTO user (username, email, passward)
VALUES ('$user', '$email', '$pass1')";
}

if ($conn->query($sql) === TRUE) {
    echo "Register successfully";
  }
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }


?> 