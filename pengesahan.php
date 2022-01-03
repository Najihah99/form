<?php 
$servername="localhost";
$username="root";
$password="";
$database_name="prasarana";

	$conn = mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
	die("connection failed" . mysqli_connect_error());	
}
if(isset($_POST['submit'])){	
// get the post records
$bank = $_POST['bank'];
$slip = $_POST['slip'];
$single = $_POST['single'];
$area = $_POST['area'];
$name = $_POST['name'];
$ic = $_POST['ic'];
$department = $_POST['department'];
$contact = $_POST['contact'];
$email = $_POST['email'];

// database insert SQL code
$sql_query = "INSERT INTO majikan (`bank`, `slip`, `single`,`other`,`name`,`ic`,`department`,`contact`, `email`) VALUES ('$bank', '$slip', '$single','$area','$name','$ic','$department','$contact','$email')";

// insert in database 
if(mysqli_query($conn , $sql_query))
{
	echo "<script language='javaScript'> alert ('New records sucessfully being added! ');
		window.location.href='majikan.php';</script>";
}
else {
	echo "<script language='javaScript'> alert ('Failed to add the record. Please make sure your ic is correct');
		window.location.href='majikan.php';</script>" ;
}	
mysqli_close($conn);
}
?>