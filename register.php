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
			<div class="row">
				
				<div class="col-lg-8">
          
					<form class="form-horizontal" action="controller/exec_register.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Registration</legend>
<?php 
            if(isset($_SESSION['ERR_MSG']) && is_array($_SESSION['ERR_MSG']) && count($_SESSION['ERR_MSG']) >0){
              echo "<div class='alert alert-danger'><ul>";
              foreach ($_SESSION['ERR_MSG'] as $msg) {
                 echo "<li>" . $msg . "</li>";
              }
              echo "</ul></div>";
            }
            unset($_SESSION['ERR_MSG']);
          ?>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-6">
  <input id="textinput" name="fname" type="text" placeholder="Your First Name" class="form-control input-md">
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-6">
  <input id="textinput" name="lname" type="text" placeholder="Last Name, Please" class="form-control input-md">
    
  </div>
</div>

<!-- Email input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email Address</label>  
  <div class="col-md-6">
  <input id="textinput" name="email" type="text" placeholder="Valid Email Address" class="form-control input-md">
   
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-6">
  <input id="textinput" name="uname" type="text" placeholder="Available Username" class="form-control input-md">
   
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password </label>
  <div class="col-md-6">
    <input id="passwordinput" name="pass" type="password" placeholder="Password is Required" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Retype- Password</label>
  <div class="col-md-6">
    <input id="passwordinput" name="repass" type="password" placeholder="Retype your Password" class="form-control input-md">
    
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

				<div class="col-lg-4">
					<h4>Hangout with Recently Registered Authors!</h4>
					<table class="table">
              <?php
                $select=mysql_query("SELECT * FROM users limit 10");
                while($row=mysql_fetch_array($select)){
                  echo "<tr>";
                    echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td><td><a href='mailto:$row[email]'>" . $row['email'] . "</a></td>";
                  echo "</tr>";
                }
              ?>
          </table>
				</div>
			</div>
		</div>
	</body>
</html>