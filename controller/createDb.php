<?php
include("../config/conf.inc");
if($conn){
	$db=$_POST['dbname'];
	$qry=mysql_query("CREATE DATABASE $db", $conn);
	if($qry){
		echo "<meta http-equiv='refresh' content='0,../index.php?success=true'>";
		echo "Please wait...";
	}
	else{
		echo "<meta http-equiv='refresh' content='0,../index.php?success=false'>";
		echo "Please wait...";
	}
}
else{

	echo "Connection Refused!";
}

?>