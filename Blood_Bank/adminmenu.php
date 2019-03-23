<?php
include"head.php";
?>

<nav class="navbar navbar-expand-md sticky-top" style="background-color: #A21010; font-size: 20px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    
	<ul class="navbar-nav md-auto">
		  <li class="nav-item">
		<a class="nav-link" href="showreq.php" style="color: white;">Show Request</a>
		  </li>
		  <li class="nav-item">
		<a class="nav-link" href="donorlist.php" style="color: white;">Donor List</a>
		  </li>
    </ul>
	 <ul class="nav navbar-nav ml-auto">
		<li class="nav-item">
		<a class="nav-link" href="logout.php" style="color: white;"> Logout </a>
		 </li>
	 </ul>
  </div>  
</nav>

<?php
include"seeker.php";
?>