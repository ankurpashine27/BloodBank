<?php
include"donorhome.php";
?>

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<form class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
<h2 class="w3-center">Friend Details</h2>
 
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

<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple"> Refer </button>
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
		   $con=mysqli_connect('localhost','root','','bloodbank');
           $q="Insert into donor values('$f','$l','$e','$p')";
			 $rs=mysqli_query($con,$q);
				if($rs)
				{
					echo"<script>alert('Added');</script>";
					echo"<script>window.location='donorhome.php';</script>";
				}
				else
				{
					echo"<script>alert('Error');</script>";
					
				}
	}
?>