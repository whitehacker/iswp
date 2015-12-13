<?php
$error = false;
if(isset($_POST['login'])){
	$username= preg_replace('/[^A-Za-z]/', '', $_POST['username']);
	$pass=md5($_POST['pass']);
	if(file_exists('users/'.$username . '.xml')){
		$xml= new SimpleXMLElement('users/' . $username . '.xml', 0,true);
		if($pass == $xml->password){
			session_start();
			$_SESSION['username'] = $username;
			header('Location: index.php');
			die;
		}
	}
	$error = true;
}

?>
<!Doctype html>
<html>
<head>


</head>
<body>
	<?php
		if($error){
			echo "Invalid Username or Password!";
		}
	?>
<form action="" method="POST">
	Username:<input type="text" name="username" /><br/>
	Password:<input type="password" name="pass" /><br/>
	<input type="submit" name="login" value="LOGIN!" /><br/>
</form>

</body>
</html>