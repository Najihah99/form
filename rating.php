<?php 
include('dbcon.php');

if(isset($_POST['submit'])){	
// get the post records
$rate = $_POST['service'];
$rate1 = $_POST['experience'];
$commentText = $_POST['suggest'];

// database insert SQL code
$sql_query = "INSERT INTO rating (`service`,`experience`,`suggest`) VALUES ('$rate','$rate1','$commentText')";

// insert in database 
if(mysqli_query($con , $sql_query))
{
	echo "<script language='javaScript'> alert ('Thank you for your feedback!');
		window.location.href='summary.php';</script>";;
}
else {
	echo "error: " . $sql_query. "".mysqli_error($con);
}	
mysqli_close($con);
}
if (isset($_POST['cancel'])){
	echo "<script language='javaScript'> 
	if(confirm('Are you sure you don't want to leave any feedback?')==true){
		window.location.href='summary.php';
	}
	else{
		return false;
	}</script>";
}
?>