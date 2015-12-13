<?php
session_start();
	$errors=array();
	if(isset($_POST['register'])){
		$username= preg_replace('/[^A-Za-z]/', '', $_POST['user']);
		$email = $_POST['email'];
		$password=$_POST['pass'];
		$repass=$_POST['repass'];

		if(file_exists('users/'.$username. '.xml')){
			$errors[]='Username already exists!';
		}
		if($username==''){
			$errors[]='Username is blank!';
		}
		if($email==''){
			$errors[]='You have to enter your valid Email address';
		}
		if($password==''){
			$errors[]='You have to enter your password!';
		}
		if($password != $repass){
			$errors[]='Passwords do not match!';
		}
		if(count($errors) >0){
			$_SESSION['ERR_MSG']= $errors;
		}
		if(count($errors) ==0){
			$xml = new SimpleXMLElement('<user></user>');
			$xml->addChild('password', md5($password));
			$xml->addChild('email',$email);
			$xml->asXML('users/'. $username . '.xml');
			header('Location: login.php');
			die;
		}

	}

?>
<!Doctype html>
<html>
	<head>
	</head>
	<body>
		<?php 
			if(count($_SESSION['ERR_MSG'])>0){
				echo "<ul>";
					foreach ($_SESSION['ERR_MSG'] as $val) {
						echo "<li>" . $val . "</li>";
					}
				echo "</ul>";
			}
		?>
		<form action="" method="POST">
		Username:<input type="text" name="user" /><br/>
		Email:<input type="text" name="email" /><br/>
		Password:<input type="password" name="pass" /><br/>
		Confirm Password:<input type="password" name="repass" /><br/>
		<input type="submit" name="register" value="Register!"/><br/>
	</form>
	</body>
</html>