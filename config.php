<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "da_database";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con) {
	echo "Connection Failed!";
	exit();
}