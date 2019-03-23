<?php
include"head.php";
include 'menu.php';

$state = $_REQUEST['state'];
$city = $_REQUEST['city'];
$area = $_REQUEST['pin'];
$bg = $_REQUEST['bg'];
$con = mysqli_connect('localhost','root','','bloodbank');
$q = "select * from donor where state='$state' and city='$city' and area='$area' and bg='$bg'";
$rs = mysqli_query($con,$q);
echo "<div class='table-responsive' style='width: 80%; margin: auto; margin-top: 50px;'>          
		  <table class='table'>
		    <thead>
		    	<tr>
		    		<th>First Name</th>
		    		<th>Last Name </th>
		    		<th>Email</th>
		    		<th>Mobile</th>
		    		<th>BloodGroup</th>
		    		<th>State</th>
		    		<th>City</th>
		    		<th>Area</th>
		    	</tr>
		    </thead>
		    <tbody>";
while($row=mysqli_fetch_array($rs))
{
	echo "
		<tr>
			<td> $row[fname] </td>
			<td> $row[lname] </td>
			<td> $row[email] </td>
			<td> $row[mobile] </td>
			<td> $row[bg] </td>
			<td> $row[state] </td>
			<td> $row[city] </td>
			<td> $row[area] </td>
		</tr>";
}
echo "</tbody>
	</table>
	</div>";

?>