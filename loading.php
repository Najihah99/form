<?php 
session_start();
 if(!isset($_SESSION['id'])){ //if login in session is not set


echo "<script language='javaScript'> alert ('Error! Please Login!');
	window.location.href='landing.html';</script>";
}
?>
<html>
<head>
    <meta http-equiv="refresh" content="2;url=prasarana.php">
	<link rel="icon" type="image/ico" href="img/favicon.ico">
	<title>Leave System</title>
	<style>
		a img{
			padding_top:25%;
			
		}
	</style>
</head>
<body>
    <div>
   	
	<center>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>	
		<br>
		<br>
		
		


		<center>
		  <a href="prasarana.php"><img src="loading.gif" width="10%"/></a>
		</center>
</center>
</div>
</body> 	
</html>