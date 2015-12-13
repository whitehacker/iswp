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
			var val1=document.getElementById("in1").value;
			var val2=document.getElementById("in2").value;
			var val3=document.getElementById("in3").value;
			var data="val1="+val1+"&val2="+val2+"&val3="+val3;
			httpObject.open("POST","process.php",true);
			httpObject.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				httpObject.onreadystatechange=function(){
					if(httpObject.readyState==4 && httpObject.status==200){
			document.getElementById("outputText").innerHTML=httpObject.responseText;
		}};	
		httpObject.send(data);
			}
	}
	var httpObject=null;
	</script>
</head>

<body>
	<!-- Enter your Username:<input type="text" id="inputText" onKeyup="doWork()"> -->
	<span id="outputText"></span><br/>
	Username:<input type="text" id="in1"><br/>
	Password:<input type="password" id="in2"><br/>
	Email:<input type="text" id="in3"><br/>
	<a href="javascript:void" onclick="doWork()">Save Data</a>
	
	

	</body>

</html>
