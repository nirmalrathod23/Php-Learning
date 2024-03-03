<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test_my_new";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

$query = "INSERT INTO users(`name`, `email`, `phno`, `password`) VALUES('mansi', 'mansi@gmail.com', '9876543210', 'password')";

$res = mysqli_query($conn, $query);

if($res){
    echo "data inserted...";
}else{
    die("Query error:" . mysqli_connect_error());
}

?>