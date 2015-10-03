<?php
session_start();
unset($_SESSION['MEM_ID']);
unset($_SESSION['FULL_NAME']);
$_SESSION['LOGOUT_SUCCESS']="You have Successfully Logged Out!";
header("location:login.php");
exit();
?>