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

$qry=mysql_query("DESCRIBE $tab");

if($qry){
	echo "<table class='table table-bordered'>";
	echo "<tr><th>Field Name</th><th>Data Type</th><th>Nullability</th><th>Key-Primary-Foreign</th><th>Default Value</th><th>Meta Information</th><th colspan=3>Actions</th></tr>";

	while($row=mysql_fetch_array($qry)){
		echo "<tr>";
			echo "<td>" . $row['Field'] . "</td><td>" . $row['Type'] . "</td><td>" . $row['Null'] . "</td><td>" . $row['Key'] . "</td><td>" . $row['Default'] . "</td><td>" . $row['Extra'] . "</td>";
			echo "<td><i class='fa fa-pencil-square text-danger'></i></td><td><i class='fa fa-key text-info'></i></td><td><i class='fa fa-minus-square'></i></td>";

		echo "</tr>";

	}
	echo "</table>";
}


?>
</div>

</div>
</div>

</body>

</html>