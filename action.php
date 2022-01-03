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
$id = $_POST['id'];
$name = $_POST['name'];
$grade = $_POST['grade'];
$department = $_POST['department'];
// database insert SQL code
$sql_query = "INSERT INTO staff (`id`, `name`, `grade`, `department`) VALUES ('$id', '$name','$grade','$department')";

// insert in database 
if(mysqli_query($conn , $sql_query))
{
	echo "<script language='javaScript'> alert ('New records sucessfully being added! ');
		window.location.href='profile.php';</script>";;
}
else {
	echo "error: " . $sql_query. "".mysqli_error($conn);
}	
mysqli_close($conn);
}
?>