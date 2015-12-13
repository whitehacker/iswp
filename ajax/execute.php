<?php
	mysql_connect("localhost","root","");
	mysql_select_db("2015fall");

	if($_POST['id']){
		$id=mysql_real_escape_string($_POST['id']);
		$first=mysql_real_escape_string($_POST['firstname']);
		$last=mysql_real_escape_string($_POST['lastname']);
	$sql=mysql_query("UPDATE users SET first_name='$first', last_name='$last' WHERE id=$id");
	}

?>