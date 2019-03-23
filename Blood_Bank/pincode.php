<?php
$city = $_REQUEST['c'];
$con = mysqli_connect('localhost','root','','bloodbank');
$q = "select * from pincode where city_name = '$city'";
$rs = mysqli_query($con,$q);
$arr = "";
while ($row = mysqli_fetch_array($rs)) { 
    $arr = $arr."<option value='$row[pincode]'>$row[pincode]</option>";   
}
echo $arr;
?>