<?php 
$hostname = "localhost";
$username = "root";
$password ="";
$dbname = "ecommerce";

$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_error){
    die("database connection failed: " . $conn->connect_error);
}
else{
    echo "database connected successfully";
}



?>