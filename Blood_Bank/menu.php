<nav class="navbar navbar-expand-md sticky-top fill" style="background-color: #A21010; font-size: 20px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php"> Home </a>
      </li>
    </ul>
	<ul class="navbar-nav mx-auto">
      <a class="nav-link" href="#adminlogin" style="color: white; padding: 0px; padding-top: 9px;" data-toggle="modal"><i class="material-icons" style="font-size:30px; color: white;">account_circle</i></a>
      <li class="nav-item">
        <a class="nav-link" href="#adminlogin" data-toggle="modal"> Admin Login </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#donorlogin" data-toggle="modal"> Donor Login </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php"> Register </a>
      </li>
    </ul>
  </div>  
</nav>

<div id="adminlogin" class="modal fade text-center">
  <div class="modal-dialog">
    <div class="col-lg-8 col-sm-8 col-12 main-section">
      <div class="modal-content">
        <div class="col-lg-12 col-sm-12 col-12 user-img">
          <img src="image/admin.png">
        </div>
        <div class="col-lg-12 col-sm-12 col-12 user-name">
          <h1>Admin Login</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="col-lg-12 col-sm-12 col-12 form-input">
          
		<form method="post" action="adminlogin.php">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="UserName" name="uname">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="pass">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
        </form>
			
        </div>
        <div class="col-lg-12 col-sm-12 col-12 link-part">
            <a href="" target="_blank">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="donorlogin" class="modal fade text-center">
  <div class="modal-dialog">
    <div class="col-lg-8 col-sm-8 col-12 main-section">
      <div class="modal-content">
        <div class="col-lg-12 col-sm-12 col-12 user-img">
          <img src="image/user1.png">
        </div>
        <div class="col-lg-12 col-sm-12 col-12 user-name">
          <h1>Donor Login</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="col-lg-12 col-sm-12 col-12 form-input">
          
		<form method="post" action="donorlogin.php">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="User Name" name="user">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="pass">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
        </form>
			
        </div>
        <div class="col-lg-12 col-sm-12 col-12 link-part">
            <a href="" target="_blank">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
</div>