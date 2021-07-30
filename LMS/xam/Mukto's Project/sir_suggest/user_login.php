<?php
$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "register";

$errors= array();


$user= $_POST["username"];
$pass= $_POST["password_1"];

$user=mysql_real_escape_string($user);
$pass=mysql_real_escape_string($pass);



// connection with database
mysql_connect($servername, $username1, $password);
mysql_select_db("register");



if(empty($user))
{
array_push($errors, "Username is required");
}

if(empty($pass))
{
array_push($errors, "password is required");
}



if(count($errors)==0)
{
$result = mysql_query("SELECT * from user where username='$user' and passward='$pass'") 
or die("Failed".mysql_error());
$row = mysql_fetch_array($result);
       
    
}
if($row["username"]==$user && $row["passward"]==$pass)

 {
    echo "login successfully <br> welcome to ".$row["username"];
    
  }
  
 else {
    echo "Invalid username/password: " ;
    }


?> 