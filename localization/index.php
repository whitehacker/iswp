<!Doctype html>
<html>
<head>
	<?php
	mysql_connect("localhost","root","");
	mysql_select_db("2015fall");
if(isset($_GET['lang'])){
	if($_GET['lang']=='ps'){
		$language="ps";
		include("languages/ps.php");
		$qry=mysql_query("SELECT * FROM news WHERE lang='ps'");

	}
	else{
		$language="da";
		include("languages/da.php");
		$qry=mysql_query("SELECT * FROM news WHERE lang='da'");
	}
echo "<link rel='stylesheet' type='text/css' href='rtl.css'>";
}
else{
	$language="en";
	$qry=mysql_query("SELECT * FROM news WHERE lang='en'");
include("languages/en.php");	
echo "<link rel='stylesheet' type='text/css' href='ltr.css'>";
}

?>

<meta charset="UTF-8">
</head>
<body dir="<?php echo $dir; ?>">
<div class="main">
	<div class="lang_links">
		<?php 
		if(isset($_GET['lang'])){
			if($_GET['lang']=='ps'){
				echo "<a href='index.php'>
			English
		</a>";
		echo "<a href='index.php?lang=da'>
			دري
		</a>";
			}
			else{
				echo "<a href='index.php'>
			English
		</a>";
		echo "<a href='index.php?lang=ps'>
			پښتو
		</a>";
			}
		}
		else{
		echo "<a href='index.php?lang=ps'>
			پښتو
		</a>";
		echo "<a href='index.php?lang=da'>
			دري
		</a>";
	}
?>
	</div>
<div class="head">
	<h2><?php echo $heading; ?></h2>
</div>
<div class="nav">
	<ul>
		<li><?php echo $nav_home; ?></li>
		<li><?php echo $nav_contact; ?></li>
		<li><?php echo $nav_about; ?></li>
	</ul>
</div>

<div class="content">
<p><?php echo $par; ?>
</p>
<?php
	while($row=mysql_fetch_array($qry)){
		echo $row['title'] . "<br/>";
		echo $row['txt'];
	}
?>
<form action="insert.php" method="post">
	<table>
		<tr><th><?php echo $title; ?>:</th><td><input type="text" name="title"></td></tr>
		<tr><th><?php echo $txt; ?>:</th><td><textarea name="txt"></textarea></td></tr>
		<tr><th>&nbsp;</th><td><input type="hidden" name="lang" value="<?php echo $language; ?>"></td></tr>
		<tr><th>&nbsp;</th><td><input type="submit" value="Post Newws"></td></tr>
	</table>
	</form>
</div>
</div>

</body>

</html>