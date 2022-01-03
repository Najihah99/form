<?php 
session_start();

include('dbcon.php');

$id = $_POST['id'];
$password = $_POST['password'];

$login = mysqli_query($con, "SELECT * FROM admin WHERE id ='$id' AND password ='$password'");

$arr = mysqli_fetch_assoc($login);

/*
if($arr['firstLogin'] == 1){
	 $_SESSION['staffno'] = $arr['staff_ic'];
	 header('Location: memreg.php');
	 //$check = "UPDATE staff SET firstLogin ='0' WHERE staff_ic = '$staffno' ";
	 //$run = mysqli_query($conn, $check);
}

else{
*/	

if($row = mysqli_num_rows($login) != 0)
{
	  $_SESSION['id'] = $arr['id'];
	  header('Location: loading.php');
}
else{
	echo "<script language='javaScript'> alert ('Wrong username and password! ');
		window.location.href='landing.html';</script>";
}
//}
mysqli_close();
?>