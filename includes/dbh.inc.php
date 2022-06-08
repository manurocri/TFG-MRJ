<?php

$servername="localhost";
$dbusername="root";
$password="";
$dBName="unlimiteddb";

$conn=mysqli_connect($servername,$dbusername,$password,$dBName);

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
$stmt = mysqli_stmt_init($conn);