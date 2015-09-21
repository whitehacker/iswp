<?php
include("../config/conf.inc");
	$id=$_POST['id'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$cat=$_POST['cat'];
	$tags=$_POST['tags'];
	$txt=$_POST['body'];

	$qry=mysql_query("UPDATE news SET title='$title',author='$author',category='$cat',tags='$tags',txt='$txt' WHERE id=$id");
	if($qry){
		echo "News has been Updated!";
	}
	else{
	
		echo "Error Occured" . mysql_error();
	}



?>