<?php
	$user = $_REQUEST['uname'];
	$pass = $_REQUEST['pass'];
	$con = mysqli_connect('localhost','root','','bloodbank');
	$q = "Select * from admin where uname='$user' and pass='$pass'";
	$rs = mysqli_query($con,$q);
	if($rs)
	{
		session_start();
		$_SESSION['uname']=$user;
		echo "<script> window.location='adminhome.php'; </script>";
	}
	else
	{
		echo "<script> alert('Invalid Credentials'); </script>";
		echo "<script> window.location='home.php'; </script>";
	}
?>