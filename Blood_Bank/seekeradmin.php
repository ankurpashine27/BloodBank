<style type="text/css">
	#j1{
		margin-top: 50px;
		margin-left: 50px;
		width: 60%;
		height: 100%;
		background: linear-gradient(to bottom, rgba(182, 189, 254,0), rgba(182, 189, 254,1));
		float: left;
	}
</style>

<div style="width: 100%; height: 500px;">
	<div class="jumbotron" id="j1">

		<center><h2 style="color: white;"> Find a Donor </h2></center>
		<div class="container" style="width: 60%;">
			<form>
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
				        	<th><h4><label for="area" class="fnt"> Area </label></h4></th>
				        	<th><select class="form-control" id="area" name="area">
				        			<option>Select Area</option>
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