<?php

# 1. Declare variables for connection db.
$host = "127.0.0.1"; #localhost
$db = "gendoc";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$db);

if( mysqli_connect_errno() ){
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	
	die();
}



?>