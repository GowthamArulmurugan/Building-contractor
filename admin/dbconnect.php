<?php
$servername="localhost";
$username = "root";
$password = "";
$mydb ="contractor"; 
$conn = mysqli_connect($servername,$username,$password,$mydb);
if(!$conn){
die("cant reach database" .mysqli_connect_error());
} 
?>