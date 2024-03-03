<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// $port = 3306;
// $socket = "";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(!$conn){
    die("databse connection failed" . mysqli_connect_error());
}else{
    echo "database connected successfully...";
}



?>