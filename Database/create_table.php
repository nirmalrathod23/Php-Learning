<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test_my_new";


$conn = mysqli_connect($hostname, $username, $password, $dbname);

$query = "CREATE TABLE users(
    id int,
    name varchar(20),
    email varchar(20),
    phno varchar(20),
    password varchar(20)

)";

$res = mysqli_query($conn, $query);

if($res){
    echo "table created...";
}else{
    die("Query error:" . mysqli_connect_error());
}



?>