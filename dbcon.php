<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="prasarana";

	$con=mysqli_connect($servername,$username,$password,$database_name);
if(!$con){
	die("connection failed" . mysqli_connect_error());	
}
?>