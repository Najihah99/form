<?php
include_once 'dbcon.php';
session_start();
$id=$_POST['id'];
$username= $_POST['username'];
$password = $_POST['password'];
$grade = $_POST['grade'];
$department = $_POST['department'];
$ic=$_POST['ic'];
$position= $_POST['position'];
$datejoined = $_POST['datejoined'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$empstat = $_POST['empstat'];
$query = "UPDATE staff SET username='$username',password='$password', email='$email', department='$department' WHERE id='$id'";
$result = mysqli_query($con,$query);
if ($result) {
	header("location: profile.php");
}
?>