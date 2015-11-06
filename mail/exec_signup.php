<?php
include("../controller/config/conf.inc");
$confirm_code=md5(uniqid()rand());
$email=$_POST['email'];
$sql=mysql_query("INSERT INTO temp_members VALUES(null, '$email','$confirm_code'");
if($sql){
	$to=$email;
	$subject="Activate Your Account!";
	$header="FROM: RAHNAMAAF <info@rahnama.af";
	$message="Your Confirmation Link \r\n";
	$message.="Click on this link to activate your account \r\n";
	$message.="http://cs.rahnama.af/iswp/confirm.php?conf_code=$confirm_code";
	$sentmail=mail($to,$subject,$message,$header);

}
?>