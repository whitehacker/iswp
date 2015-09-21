<?php
include("../config/conf.inc");
	$title=$_POST['title'];
	$author=$_POST['author'];
	$cat=$_POST['cat'];
	$tags=$_POST['tags'];
	$txt=$_POST['body'];

	$qry=mysql_query("INSERT INTO news(id,title,author,category,tags,txt) VALUES(null,'$title','$author','$cat','$tags','$txt')");
	if($qry){
		echo "News has been Uploaded!";
	}
	else{
	
		echo "Error Occured" . mysql_error();
	}



?>