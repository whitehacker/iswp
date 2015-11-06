<?php
mysql_connect("localhost","root","");
mysql_select_db("2015fall");
$title=$_POST['title'];
$text=$_POST['txt'];
$lang=$_POST['lang'];
mysql_query("SET NAMES uft8");
mysql_query("SET character-set utf8");
$qry=mysql_query("INSERT INTO news (id,title,txt,lang) VALUES(null, '$title','$text','$lang')");
if($qry){
	echo "Success";
}
else{
	echo "Error:" . mysql_error();
}


?>