<?php
session_start();
 if(!isset($_SESSION['id'])){ //if login in session is not set
echo "<script language='javaScript'> alert ('Error! Please Login!');
	window.location.href='landing.html';</script>";
}

unset($_SESSION['id']);

session_unset(); 

session_destroy();
	
header('Location: landing.html');

?>