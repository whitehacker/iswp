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
    <div class="col-md-3">
    	<div class="row">
    		<h3>Recent News</h3>
    		<?php
    			$select=mysql_query("SELECT * FROM news order by pub_date desc limit 5");
    			while($record=mysql_fetch_array($select)){
    		?>
    		<a href='details.php?id=<?php echo $record[id]; ?>'>
    			<?php 
    				echo $record['title']; 
    			?>
    		</a><br/>
    		<?php 
    			}
    		?>
    		<h3>Categories</h3>
    		<?php
    		$select=mysql_query("SELECT distinct category FROM news");
    			while($record=mysql_fetch_array($select)){


    		?>
    			<a href='category.php?cat=<?php echo $record[category]; ?>'>
    			<?php 
    				echo $record['category']; 
    			?>
    		</a><br/>
    		<?php 

    			}
    		?>
    	</div>
    	
    </div>
	<div class="col-md-8">
		<div id="postlist">
			<?php 
			$select=mysql_query("SELECT * FROM news order by pub_date desc limit 5");
				while($row=mysql_fetch_array($select)){
			?>
			<div class="panel">
                <div class="panel-heading">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3 class="pull-left"><?php echo $row['title']; ?>
                                	<small>Written by:<?php echo $row['author']; ?></small>
                                </h3>
                            </div>
                            <div class="col-sm-3">
                                <h4 class="pull-right">
                                <small><em><?php echo $row['pub_date']; ?></em></small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="panel-body">
               <?php 

               $txt=$row['txt']; 
               $txt=substr($txt, 0,200);
               $txt.="<a href='details.php?id=$row[id]'>Read More...</a>";
               echo $txt;
               ?></a>
            </div>
            
            <div class="panel-footer">
            	<?php
            		$tags=$row['tags'];
            		$tagsarr=explode(",", $tags);
            		foreach ($tagsarr as $key=>$value) {
            			echo " <span class='label label-default'>$value</span>";
            		}
            	?>
               
            </div>
        </div>
        <?php
        	}
        ?>
       
    </div>
		
</div>

	

</div>
</div>
	</body>


</html>