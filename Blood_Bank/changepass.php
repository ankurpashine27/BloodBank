<?php
session_start();
include("donorhome.php");
?>

<div class='row'>
	<div class='col-md-3'></div>
	<div class='col-md-6'>
<form>
	<table class="table table-striped">
<?php
				$u=$_SESSION['u'];
				$con=mysqli_connect('localhost','root','','bloodbank');
				$q="select * from donor where user='$u'";
				$rs=mysqli_query($con,$q);
				while($row=mysqli_fetch_array($rs))
				{
						echo"<input type='text' name='pass' value='$row[pass]' style='display:none'>";
						echo"<tr>
								<td colspan='2' align='left' ><h2/>CHANGE PASSWORD</td>
							</tr>
							<tr>
								<td ><h4/><b/>Previous Password:</td>
								<td><input type='password' name='previous'></td>
							</tr>
							<tr>
								<td><h4/><b/>New Password:</td>
								<td><input type='password' name='new'></td>
							</tr>
							<tr>
								<td ><h4/><b/>Confirm Password:</td>
								<td><input type='password' name='confirm'></td>
							</tr>
							<tr>
								<td colspan='2' align='center' ><input type='submit' value='Change Password'></td>
							</tr>";	
				}
?>	
	</table>
</form>
	</div>		
</div>
<?php
	if(isset($_REQUEST["previous"]))
	{
		$u=$_SESSION['u'];
		$pass=$_REQUEST['pass'];
		$p=$_REQUEST['previous'];
		$n=$_REQUEST['new'];
		$c=$_REQUEST['confirm'];
		if($pass==$p&&$n==$c)
		{
				$con=mysqli_connect('localhost','root','','bloodbank');
				$q="UPDATE donor set pass='$n' where user='$u'";
				$rs=mysqli_query($con,$q);
				if($rs)
				{
					echo"<script>alert('Password Changed Succesfully');</script>";
					echo"<script>window.location='donorhome.php';</script>";
				}
				else
				{
					echo"<script>alert('Confirm Password Not Same');</script>";	
				}	
		}
		else
			echo"<script>alert('Wrong Previous Password');</script>";
	}
?>