<?php
session_start();
require_once("../config/conf.inc");
$err=array();
$err_flag=false;
function clean($str){
		$str=trim($str);
		if(get_magic_quotes_gpc){
			$str=stripcslashes($str);
		}
		return mysql_real_escape_string($str);
	}
$login=$_POST['login'];
$pass=$_POST['pass'];
$login=clean($login);
$pass=clean($pass);

if($login==''){
	$err[]="Please Enter a Valid Username!";
	$err_flag=true;
}
if($pass==''){
	$err[]="Please Enter your Matching Password!";
	$err_flag=true;
}
if($err_flag){
	$_SESSION['LOGIN_FAIL']=$err;
	session_write_close();
	header("location:../login.php");
	exit();
}
$qry=mysql_query("SELECT * FROM users WHERE user_name='$login' AND pass='".SHA1($pass) . "'");
if($qry){
	if(mysql_num_rows($qry)==1){
		$row=mysql_fetch_array($qry);
		$_SESSION['MEM_ID']=$row['id'];
		$_SESSION['FULL_NAME']=$row['first_name'] . " " . $row['last_name'];
		session_write_close();
		header("location:../home.php");
		exit();
	}
	else{
		header("location:../login.php");
		exit();
	}
}
else{
echo mysql_error();
}
?>