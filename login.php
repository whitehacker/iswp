<?php
session_start();
include("config/conf.inc");
?>
<!Doctype html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />



	</head>

	<body>
		


		<div class="container">
			<div class="row text-center">
				
				<div class="col-lg-9">
            <form class="form-horizontal" method="POST" action="controller/exec_login.php">
<fieldset>

<!-- Form Name -->
<legend>Login here!</legend>
<?php 
            if(isset($_SESSION['LOGIN_FAIL']) && is_array($_SESSION['LOGIN_FAIL']) && count($_SESSION['LOGIN_FAIL']) >0){
              echo "<div class='alert alert-danger'><ul>";
              foreach ($_SESSION['LOGIN_FAIL'] as $msg) {
                 echo "<li>" . $msg . "</li>";
              }
              echo "</ul></div>";
            }
            if(isset($_SESSION['LOGIN_REQ'])){
              echo "<div class='alert alert-info'>" . $_SESSION['LOGIN_REQ'] . "</div>";
            }
            if(isset($_SESSION['LOGOUT_SUCCESS'])){
              echo "<div class='alert alert-info'>" . $_SESSION['LOGOUT_SUCCESS'] . "</div>";
            }
            unset($_SESSION['LOGIN_REQ']);
            unset($_SESSION['LOGOUT_SUCCESS']);
            unset($_SESSION['LOGIN_FAIL']);
          ?>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Login Name</label>  
  <div class="col-md-6">
  <input id="textinput" name="login" type="text" class="form-control input-md">
 
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password Input</label>
  <div class="col-md-6">
    <input id="passwordinput" name="pass" type="password"  class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Signin!</label>
  <div class="col-md-4">
    <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-success">Signin!</button>
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