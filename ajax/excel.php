<!Doctype html>
<html>
<head>
	<script type="text/javascript" src="jquery.js"></script>
	<script>
	$(document).ready(function(){
		$(".edit_tr").click(function(){
			var ID=$(this).attr('id');
			$('#first_'+ID).hide();
			$('#last_'+ID).hide();
			$('#first_input_'+ID).show();
			$('#last_input_'+ID).show();

		}).change(function(){
			var ID=$(this).attr('id');
			var first=$('#first_input_'+ID).val();
			var last=$('#last_input_'+ID).val();
			var dataString= 'id='+ID+'&firstname='+first+'&lastname='+last;
			if(first.length>0 && last.length>0){
				$.ajax({
					type: "POST",
					url: "execute.php",
					data: dataString,
					cache: false,
					success: function(html){
						$('#first_'+ID).html(first);
						$('#last_'+ID).html(last);
					}
				});
			}
			else{
				alert("Please Write Something!");
			}
		});
		$(".editbox").mouseup(function(){
			return false;
		});
		$(document).mouseup(function(){
			$(".editbox").hide();
			$(".text").show();
		});
	});//End Document
	</script>
<style type="text/css">
.editbox{
	display: none;
}
.edit_tr:hover{
	background: url('edit.png') right no-repeat #80CBE5;
}
</style>
</head>

<body>

<table>
<tr><th>First Name</th><th>Last Name</th></tr>
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("2015fall");
	$qry=mysql_query("SELECT * FROM users");
	while($row=mysql_fetch_array($qry)){
		$id=$row['id'];
		$firstname=$row['first_name'];
		$lastname=$row['last_name'];

		?>
		<tr id="<?php echo $id;?>" class="edit_tr">
			<td class="edit_td">
				<span id="first_<?php echo $id;?>" class="text">
						<?php echo $firstname; ?>
				</span>
				<input type="text" value="<?php echo $firstname;?>" class="editbox" id="first_input_<?php echo $id;?>">
			</td>
			<td class="edit_td">
				<span id="last_<?php echo $id;?>" class="text">
						<?php echo $lastname; ?>
				</span>
				<input type="text" value="<?php echo $lastname;?>" class="editbox" id="last_input_<?php echo $id;?>">
			</td>
		</tr>
<?php
	}
?>

</table>

	</body>


</html>