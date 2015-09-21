<!Doctype html>
<?php
include("config/conf.inc");
?>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />



	</head>

	<body>
		


		<div class="container">
			<div class="row">
				
				<div class="col-lg-5">
					<form class="form-horizontal" method="POST" action="controller/InsertNews.php">
<fieldset>

<!-- Form Name -->
<legend>Publish News</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Title</label>  
  <div class="col-md-6">
  <input id="textinput" name="title" type="text" placeholder="placeholder" class="form-control input-md">
   
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Author</label>  
  <div class="col-md-6">
  <input id="textinput" name="author" type="text" placeholder="placeholder" class="form-control input-md">
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Tags</label>  
  <div class="col-md-6">
  <input id="textinput" name="tags" type="text" placeholder="placeholder" class="form-control input-md">
  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Category</label>
  <div class="col-md-6">
    <select id="selectbasic" name="cat" class="form-control">
      <option value="Science">Science</option>
      <option value="Technology">Technology</option>
      <option value="Sports">Sports</option>
      <option value="Politics">Politics</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Body</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="textarea" name="body">Details....</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Publish News</label>
  <div class="col-md-4">
    <button id="singlebutton" name="subbtn" class="btn btn-primary">Upload News</button>
  </div>
</div>

</fieldset>
</form>


				</div>

				<div class="col-lg-7">
					<h3>Published News So far.</h3>
					<?php
					$sql=mysql_query("SELECT * FROM news");
					if($sql){
						$i=1;
						echo "<table class='table table-bordered'>";
						echo "<tr><th>S/N</th><th>News Title</th><th colspan=2>Action</th></tr>";
						while($row=mysql_fetch_array($sql)){
							
							echo "<tr>";
				echo "<td>" . $i . "</td><td>".$row['title']."</td><td><a href='update.php?id=$row[id]'>Update News</a></td>";
				?>

				<td><a href='removeNews.php?id=<?php echo $row[id]; ?>' onclick="return confirm('Do you really want to remove this news?')">Remove News</a></td>
							</tr>
						
						<?php	
						$i++;
						}

						echo "</table>";
					}


					else{

						echo "<p class='alert alert-info'> You have no Database!</p>";
					}
					?>
				</div>
			</div>
		</div>

	</body>


</html>