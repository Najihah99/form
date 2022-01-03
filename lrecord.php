<?php 
include('dbcon.php');

if(isset($_POST['submit'])){	
// get the post records
$name = $_POST['name'];
$id = $_POST['id'];
$department = $_POST['department'];
$type = $_POST['type'];
$start = $_POST['start'];
$end = $_POST['end'];
$apply = $_POST['apply'];
$balance = $_POST['balance'];
$remarks = $_POST['remarks'];
// database insert SQL code
$sql_query = "INSERT INTO leaverecord (`name`,`id`,`department`, `type` ,`start`,`end`,`apply`, `balance`,`remarks`) VALUES ('$name','$id','$department','$type','$start','$end','$apply','$balance','$remarks')";

// insert in database 
if(mysqli_query($con , $sql_query))
{
	echo "<script language='javaScript'> alert ('New records sucessfully being added! ');
		window.location.href='summary.php';</script>";;
}
else {
	echo "error: " . $sql_query. "".mysqli_error($con);
}	
mysqli_close($con);
}
?>