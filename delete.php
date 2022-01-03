<?php
include_once 'dbcon.php';

$id = $_REQUEST[delete];
$query = "delete from staff where id='$id' ";
$result = mysqli_query($con,$query);

if($result)
{
	header("location: profile.php");
}
?>