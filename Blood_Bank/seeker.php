<style type="text/css">
	#j1{
		margin-top: 50px;
		margin-left: 50px;
		width: 60%;
		height: 100%;
		background-image: url("image/seeker.jpg");
		background-size: cover;
		background-repeat: no-repeat;
		border-radius: 20px;
		float: left;
	}
</style>

<div style="width: 100%; height: 500px;">
	<div class="jumbotron" id="j1">
		<center><h2 style="color: white;"> Find a Donor </h2></center>
		<div class="container" style="width: 60%;">
			<form method="post" action="seekersearch.php">
				<table class="table table-borderless table-sm" style="color: white;">
					<thead>
				    	<tr><div class="form-group">
				        	<th><h4><label for="state" class="fnt"> State </label></h4></th>
				        	<th><select class="form-control" id="state" name="state">
				        			<option>Select State</option>
				        			<?php
				        				$con = mysqli_connect('localhost','root','','bloodbank');
				        				$q = "Select * from states";
				        				$rs = mysqli_query($con,$q);
				        				while($row=mysqli_fetch_array($rs))
				        				{
				        					echo "<option> $row[state_name] </option>";
				        				}
				        			?>
				        		</select></th>
				      	</div></tr>
				      	<tr><div class="form-group">
				        	<th><h4><label for="city" class="fnt"> City </label></h4></th>
				        	<th><select class="form-control" id="city" name="city">
				        			<option>Select City</option>
				        			<option>Select state first</option>
				        		</select></th>
				      	</div></tr>
				      	<tr><div class="form-group">
				        	<th><h4><label for="pin" class="fnt"> PinCode </label></h4></th>
				        	<th><select class="form-control" id="pin" name="pin">
				        			<option>Select PinCode</option>
				        			<option>Any</option>
				        		</select></th>
				      	</div></tr>
				      	<tr><div class="form-group">
				        	<th><h4><label for="bg" class="fnt"> Blood Group </label></h4></th>
				        	<th><select class="form-control" id="bg" name="bg">
				        			<option>Select Group</option>
				        			<option>A+</option><option>A-</option><option>B+</option>
				        			<option>B-</option><option>AB+</option><option>AB-</option>
				        			<option>O+</option><option>O-</option>
				        		</select></th>
				      	</div></tr>
				      	<tr>
				      		<th colspan="2"><div class="container" style="width: 60%; margin-top: 10px;">
				      			<button type="submit" class="btn btn-primary btn-lg form-control" style="background-color: #0E1FA6;"> Search </button>
				      		</div></th>
				      	</tr>
				      	</thead>
				</table>
			</form>
		</div>
	</div>
	<div style=" float:left; width:25%; height:500px;">
		<video controls autoplay muted loop style="margin-left:60px; width:100%; height:50%; margin-top:10%;">
			<source src="image/blood.mp4" type="video/mp4">
		</video>
		<img src="image/blood-donation.jpg" style="margin-left:100px; width:80%; height:40%; margin-top:10%;">
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#state").change(function(){
			var state = this.value;
			$.post('cities.php',{s:state},function(data){
				$("#city").empty();
				$("#city").append("<option>Select City</option>");
				$("#city").append(data);
			});
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#city").change(function(){
			var city = this.value;
			$.post('pincode.php',{c:city},function(data){
				$("#pin").empty();
				$("#pin").append("<option>Select PinCode</option>");
				$("#pin").append(data);
			});
		});
	});
</script>