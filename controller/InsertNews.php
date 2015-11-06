<?php
include("../config/conf.inc");
	$title=$_POST['title'];
	$author=$_POST['author'];
	$cat=$_POST['cat'];
	$tags=$_POST['tags'];
	$txt=$_POST['body'];
	 //File Upload
	$name=$_FILES["photo"]["name"];
	$name=time().$name;
	$type=$_FILES["photo"]["type"];
	$size=($_FILES["photo"]["size"])/1024 . "KB";
	$temp=$_FILES["photo"]["tmp_name"];
	$error=$_FILES["photo"]["error"];
	if($error>0){
		die("Error Uploading File Error Code:" . $error);
	}
	else{
		if($type=="image/jpeg" && $size > 500000 && file_exists("uploaded/".$name))
		{
			die("That format is not allowed! Or the file already exists Or the file size is more than 5MB");
		}
		else{
			move_uploaded_file($temp, "uploaded/".$name);
			$qry=mysql_query("INSERT INTO news(id,title,author,category,tags,txt,photo) VALUES(null,'$title','$author','$cat','$tags','$txt','$name')");
			
	if($qry){
		echo "News has been Uploaded!";
	}
	else{
	
		echo "Error Occured" . mysql_error();
	}
		}
	}
?>