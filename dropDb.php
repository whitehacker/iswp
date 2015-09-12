<?php
include("config/conf.inc");

$db=$_GET['db'];

$qry=mysql_query("DROP DATABASE $db");

if($qry){
		echo "<meta http-equiv='refresh' content='0,index.php?successDrop=true'>";
		echo "Please wait...";
	}
	else{
		echo "<meta http-equiv='refresh' content='0,index.php?successDrop=false'>";
		echo "Please wait...";
	}
?>