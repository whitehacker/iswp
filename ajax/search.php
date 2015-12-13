<!Doctype html>

<html>
<head>

<style type="text/css">
	.error{
		color:red;
	}
	.success{
		color:green;
	}
	</style>
	<script type="text/javascript">
	function getHTTPObject(){
		if(window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
		else if(window.XMLHttpRequest) return new XMLHttpRequest();
		else{
			alert("Your browser does not support Ajax");
			return null;
		}
	}
	
	function doWork(){
		httpObject=getHTTPObject();
		if(httpObject !=null){
		
			httpObject.open("GET","process.php?keyword="+document.getElementById("keyword").value,true);
			// httpObject.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				httpObject.onreadystatechange=function(){
					if(httpObject.readyState==4 && httpObject.status==200){
			document.getElementById("result").innerHTML=httpObject.responseText;
		}};	
		httpObject.send(null);
			}
	}
	var httpObject=null;
	</script>



</head>


<body>
Search Term:<input type="text" id="keyword" onkeyup="doWork()">
<div id="result">

	</div>

</body>

</html>