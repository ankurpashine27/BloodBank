<?php
include"head.php"
?>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<form class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
<h2 class="w3-center">Donor Sign Up</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="dob" type="text" placeholder="Date of Birth">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-tint"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="bg" type="text" placeholder="Blood Group">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-tachometer"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="weight" type="text" placeholder="Weight">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-paper-plane"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="s" type="text" placeholder="State">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-building"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="c" type="text" placeholder="City">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-map-marker"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="a" type="text" placeholder="Area">
    </div>
</div>
	
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user-secret"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="user" type="text" placeholder="User Name">
    </div>
</div>
	
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pass" type="text" placeholder="Password">
    </div>
</div>

<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple"> Register </button>
</p>
</form>
</div>
<div class="col-md-2"></div>
</div>

<?php
		if(isset($_REQUEST['first']))
	{
		$f=$_REQUEST['first'];
		$l=$_REQUEST['last'];
		$e=$_REQUEST['email'];
		$p=$_REQUEST['phone'];
		$dob=$_REQUEST['dob'];
		$bg=$_REQUEST['bg'];
		$w=$_REQUEST['w'];
		$s=$_REQUEST['s'];
		$c=$_REQUEST['c'];
		$a=$_REQUEST['a'];
		$user=$_REQUEST['user'];
		$pass=$_REQUEST['pass'];
		$otp=$_REQUEST['otp'];
		   $con=mysqli_connect('localhost','root','','bloodbank');
           $q="Insert into donor values('$f','$l','$e','$p','$dob','$bg','$w','$s','$c','$a','$user','$pass','$otp)";
			 $rs=mysqli_query($con,$q);
				if($rs)
				{
					echo"<script>alert('Added');</script>";
					echo"<script>window.location='home.php';</script>";
				}
				else
				{
					echo"<script>alert('Error');</script>";
				}
	}
?>