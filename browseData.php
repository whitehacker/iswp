<!Doctype html>
<?php
include("config/conf.inc");
?>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />



	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<p class="lead">
						You asked, Font Awesome delivers with 66 shiny new icons in version 4.4. Want to request new icons? Here's how. Need vectors or want to use on the desktop? Check the cheatsheet.
					</p>
				</div>
<div class="col-lg-8">
<?php

$db=$_GET['db'];
$tab=$_GET['tab'];

mysql_select_db($db);

$qry=mysql_query("select * from  $tab");
$fields=mysql_num_fields($qry);
$f=array();
echo "<table class='table table-bordered'>";
echo "<tr>";
for($i=0;$i<$fields;$i++){
	echo "<th>" . mysql_field_name($qry, $i) . "</th>";
	$f[]=mysql_field_name($qry, $i);
}
echo "</tr>";

while($row=mysql_fetch_array($qry)){
	echo "<tr>";
		foreach($f  as $key){
			echo "<td>" . $row[$key] . "</td>";
		}

	echo "</tr>";
}
echo "</table>";
?>
</div>

</div>
</div>

</body>

</html>