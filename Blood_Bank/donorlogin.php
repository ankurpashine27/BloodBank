<?php
	$uname = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
	$con = mysqli_connect('localhost','root','','bloodbank');
	$q = "Select * from donor where user='$user' and pass='$pass'";
	$rs = mysqli_query($con,$q);
	if($rs)
	{
		session_start();
		$_SESSION['u']=$uname;
		echo "<script> window.location='donorhome.php'; </script>";
	}
	else
	{
		echo "<script> alert('Invalid Credentials'); </script>";
		echo "<script> window.location='home.php'; </script>";
	}
?>