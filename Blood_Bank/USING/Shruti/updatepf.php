<form>
	<div class='container'>
		<table class="table table-striped">
			<?php
				$con=mysqli_connect('localhost','root','','bloodbank');
				$q="select * from donor";
				$rs=mysqli_query($con,$q);
				while($row=mysqli_fetch_array($rs))
				{
				
					echo "	<tr>
								<td>fname<input type='text' name='fname' value='$row[fname]'></td>
								<td>lname<input type='text' name='lname' value='$row[lname]'> </td>
							</tr>
							<tr>
								<td>mail<input type='text' name='mail' value='$row[mail]'></td>
								<td>mob<input type='text' name='mob' value='$row[mob]'></td>
							</tr>	
								<td>bg<input type='text' name='bg' value='$row[bg]'></td>
								<td>state<input type='text' name='state' value='$row[state]'></td>
							<tr>	
								<td>city<input type='text' name='city' value='$row[city]'></td>
								<td>area<input type='text' name='area' value='$row[area]'></td>
							</tr>	
								<td>username<input type='text' name='user' value='$row[user]'></td>
								<td>pass<input type='password' name='pass' value='$row[pass]'></td>
							<tr>
								<td>otp<input type='text' name='otp' value='$row[otp]'></td>
							</tr>
							<tr>
								<td><input type='submit' value='update'></td>
							</tr>";
							
				}
				?>
			</table>
				
		</div>
	</form>
<?php
				if(isset($_REQUEST["user"]))
				{
					$fname=$_REQUEST["fname"];
					$lname=$_REQUEST["lname"];
					$mail=$_REQUEST["mail"];
					$mob=$_REQUEST["mob"];
					$bg=$_REQUEST["bg"];
					$state=$_REQUEST["state"];
					$city=$_REQUEST["city"];
					$area=$_REQUEST["area"];
					$user=$_REQUEST["user"];
					$pass=$_REQUEST["pass"];	
				$con=mysqli_connect('localhost','root','','bloodbank');
				$q="UPDATE donor set fname='$fname',lname='$lname',mail='$mail',mob='$mob', bg='$bg',state='$state',city='$city',area='$area',user='$user',pass='$pass'";
				$rs=mysqli_query($con,$q);
				if($rs)
				{
					echo "updated";
				}
				else
					echo"error";
				}
?>