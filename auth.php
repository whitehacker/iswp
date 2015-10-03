<?php
if(!isset($_SESSION['MEM_ID']) || (trim($_SESSION['MEM_ID'])=='')){
	header("location:login.php");
	$_SESSION['LOGIN_REQ']="In order to access this page, you have to login!";
	exit();
}
?>