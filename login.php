<!Doctype html>
<?php
include("config/conf.inc");
?>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />



	</head>

	<body>
		


		<div class="container">
			<div class="row text-center">
				
				<div class="col-lg-9">
					<form class="form-horizontal" action="controller/exec_register.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Registration</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput">First Name</label>  
  <div class="col-lg-6">
  <input id="textinput" name="fname" type="text" placeholder="placeholder" class="form-control input-md">
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-6">
  <input id="textinput" name="lname" type="text" placeholder="placeholder" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-6">
  <input id="textinput" name="uname" type="text" placeholder="placeholder" class="form-control input-md">
   
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password </label>
  <div class="col-md-6">
    <input id="passwordinput" name="pass" type="password" placeholder="placeholder" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Retype- Password</label>
  <div class="col-md-6">
    <input id="passwordinput" name="repass" type="password" placeholder="placeholder" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Sign Up</label>
  <div class="col-md-6">
    <button type="submit" id="singlebutton" class="btn btn-primary">Register</button>
  </div>
</div>

</fieldset>
</form>



				</div>

				<div class="col-lg-7">
					
					
				</div>
			</div>
		</div>

	</body>


</html>