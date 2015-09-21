<!Doctype html>
<?php
include("config/conf.inc");
?>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />



	</head>

	<body>
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


		<div class="container">
			<div class="row">
				
				
				<div class="col-lg-5">
					<p class="lead">Bootsnipp is an element gallery for web designers and web developers created by Maks, anybody using Bootstrap will find this website essential in their craft.</p>

				</div>

				<div class="col-lg-7">
          <?php
            $dbname=$_GET['db'];
          ?>
					<h3>Tables in <?php echo $dbname; ?></h3>
          <?php
          
					$sql=mysql_query("SHOW TABLES FROM $dbname");
          $records=mysql_num_rows($sql);
          if($records==0){
            echo "<p class='alert alert-info'>No table/s found in this Database!</p>";
          }
					else{
						$i=0;
						echo "<table class='table table-bordered'>";
						echo "<tr><th>S/N</th><th>Table Name</th><th colspan=3>Action</th></tr>";
						while($row=mysql_fetch_array($sql)){
							
							echo "<tr>";
				echo "<td>" . $i . "</td><td>".$row[0]."</td><td><a href='descTable.php?db=$dbname&tab=$row[0]'>Describe Table</a></td><td><a href='browseData.php?db=$dbname&tab=$row[0]'>Browse Data</a></td><td><a href='dropTable.php?$row[0]'>Drop Table</a></td>";
							echo "</tr>";
						
						
						$i++;
						}
						echo "</table>";
					}
					?>
				</div>
			</div>
		</div>

	</body>


</html>