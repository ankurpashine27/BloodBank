<?php
session_start();
include("donorhome.php");
?>
<div class='row'>
	<div class='col-md-2'></div>
	<div class='col-md-8'>
	<form>
		<table class="table table-striped">
			<?php
				$u=$_SESSION['u'];
				$con=mysqli_connect('localhost','root','','bloodbank');
				$q="select * from donor where user='$u'";
				$rs=mysqli_query($con,$q);
				while($row=mysqli_fetch_array($rs))
				{
					echo "	<tr>
								<td colspan='2' align='left'><h2/>UPDATE PROFILE</td>
							</tr>
							<tr>
								<td><h4/><b/>First Name</td><td><input type='text' name='fname' value='$row[fname]'></td>
								<td><h4/><b/>Last Name</td><td><input type='text' name='lname' value='$row[lname]'> </td>
							</tr>
							<tr>
								<td><h4/><b/>E-mail Id</td><td><input type='text' name='mail' value='$row[mail]'></td>
								<td><h4/><b/>Mobile No.</td><td><input type='text' name='mob' value='$row[mob]'></td>
							</tr>
							<tr>
								<td><h4/><b/>Date Of Birth</td><td><input type='date' name='dob' value='$row[dob]'></td>
								<td><h4/><b/>Blood Group</td><td><input type='text' name='bg' value='$row[bg]'></td>
							</tr>
							<tr>
								<td><h4/><b/>Weight</td><td><input type='text' name='w' value='$row[weight]'></td>
								<td><h4/><b/>State</td><td><input type='text' name='state' value='$row[state]'></td>
							</tr>
							<tr>	
								<td><h4/><b/>City</td><td><input type='text' name='city' value='$row[city]'></td>
								<td><h4/><b/>Area</td><td><input type='text' name='area' value='$row[area]'></td>
							</tr>
							<tr>
								<td colspan='4' align='center'><input type='submit' value='Update Profile'></td>
							</tr>";
				}
			?>
			</table>
	</form>
		</div>
		<div class='col-md-2'></div>
</div>
<?php
	if(isset($_REQUEST["fname"]))
	{
		$fname=$_REQUEST["fname"];
		$lname=$_REQUEST["lname"];
		$mail=$_REQUEST["mail"];
		$mob=$_REQUEST["mob"];
		$dob=$_REQUEST["dob"];
		$bg=$_REQUEST["bg"];
		$w=$_REQUEST["w"];
		$state=$_REQUEST["state"];
		$city=$_REQUEST["city"];
		$area=$_REQUEST["area"];
		$u=$_SESSION['u'];
		$con=mysqli_connect('localhost','root','','bloodbank');
		$q="UPDATE donor set fname='$fname',lname='$lname',mail='$mail',mob='$mob',dob='$dob',bg='$bg',weight='$w', state='$state',city='$city',area='$area' where user='$u'";
		$rs=mysqli_query($con,$q);
		if($rs)
		{
			echo"<script>alert('Details Updated');</script>";
			echo"<script>window.location='donorhome.php';</script>";
		}
		else
		{
			echo"<script>alert('Error Updating');</script>";	
		}
	}
?>