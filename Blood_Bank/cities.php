<?php
$state = $_REQUEST['s'];
$con = mysqli_connect('localhost','root','','bloodbank');
$q = "select * from cities where state_name = '$state'";
$rs = mysqli_query($con,$q);
$arr = "";
while ($row = mysqli_fetch_array($rs)) { 
    $arr = $arr."<option value='$row[city_name]'>$row[city_name]</option>";   
}
echo $arr;
?>