<?php 
$hostname = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($hostname, $username, $password);

$query = "CREATE DATABASE test_my_new";

$res = mysqli_query($con , $query);

if($res){
    echo "database created..";
}else{
    die("Query error" . mysqli_connect_error());
}



?>