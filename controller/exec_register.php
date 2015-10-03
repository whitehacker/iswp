<?php
session_start();
include("../config/conf.inc");
	$errors=array();
	$err_flag=false;
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$rpass=$_POST['repass'];

	function clean($str){
		$str=trim($str);
		if(get_magic_quotes_gpc){
			$str=stripcslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	$fname=clean($fname);
	$lname=clean($lname);
	$uname=clean($uname);
	$email=clean($email);
	$pass=clean($pass);
	$rpass=clean($rpass);
	if($uname==''){
		$errors[]="Login ID Missing!";
		$err_flag=true;
	}
	if($fname==''){
		$errors[]="First Name  Missing!";
		$err_flag=true;
	}
	if($lname==''){
		$errors[]="Last Name Missing!";
		$err_flag=true;
	}
	if($email==''){
		$errors[]="Email Address Missing!";
		$err_flag=true;
	}
	if($pass==''){
		$errors[]="Password Missing!";
		$err_flag=true;
	}
	if($rpass==''){
		$errors[]="Retype the Password!";
		$err_flag=true;
	}
	if(strcmp($pass, $rpass) !=0){
		$errors[]="Passwords do not Match!";
		$err_flag=true;
	}

	if($uname !=''){
		$check_username=mysql_query("SELECT user_name  FROM users WHERE user_name='$uname'");
		if($check_username){
			if(mysql_num_rows($check_username)>0){
				$errors[]="Login ID already in use!";
				$err_flag=true;
			}
		}
		else{
			echo "Error Occured!" . mysql_error();
		}
	}
	if($err_flag){
		$_SESSION['ERR_MSG']=$errors;
		session_write_close();
		header("location:../register.php");
		exit();
	}
	$qry=mysql_query("INSERT INTO users(id,first_name,last_name,email,user_name,pass) VALUES(null,'$fname','$lname','$email','$uname','" . SHA1($pass) . "')");
	if($qry){
		$_SESSION['FULL_NAME'] = $fname . " " . $lname;
		$_SESSION['REG_SUCCESS']="Successfully Registered!";
		header("location:../register.php");
		exit();
	}
	else{
		echo "OOps. Error Occured!" . mysql_error();
	}
?>
