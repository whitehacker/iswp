<?php
// if(isset($_GET['inputText'])){
// 	mysql_connect("localhost","root","");
// 	mysql_select_db("2015fall");
// 	$user=$_GET['inputText'];
// 	$qry=mysql_query("SELECT user_name FROM users WHERE user_name='$user'");
// 	if(mysql_num_rows($qry)==1){
// 		echo "<span class='error'>Username already exits</span>";
// 	}
// 	else{
// 		echo "<span class='success'>Username Available</span>";
// 	}
// }


	mysql_connect("localhost","root","");
	mysql_select_db("2015fall");
	// $val1=$_POST['val1'];
	// $val2=$_POST['val2'];
	// $val3=$_POST['val3'];
	// $qry=mysql_query("INSERT INTO users(id,user_name, email,pass) VALUES(null,'$val1','$val3','$val2')");
	// if($qry){
	// 	echo "<span class='success'>User has been Registered Successfully!</span>";
	// }
	// else{
	// 	echo "<span class='error'>Error Occured!".mysql_error()."</span>";
	// }
	$key=$_GET['keyword'];
	$select=mysql_query("SELECT * FROM users WHERE user_name LIKE'%$key%'");
	echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email Address</th></tr>";
	if($select){
		echo "User Found!";
		while($record=mysql_fetch_array($select)){
			echo "<tr>";
				echo "<td>" . $record['first_name'] . "</td><td>".$record['last_name'] . "</td><td>" . $record['email'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	
	else{
		echo "Not Found!";
	}
?>