<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>AJAX - XML</title>
</head>
<body>

<button onclick = "ejecutarAjax()">MOSTRARA INFORMACION EN XML </button> <br/> <br/>
	<div id="info"></div>
	<script type="text/javascript">
		
		function ejecutarAjax()
		{
			var reslutado = document.getElementById("info");
			var arr = [];

			if(window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsft.XMLHTTP");

			}




			xmlhttp.onreadystatchange=function(){
				if(xmlhttp.readyState=== 4 && xmlhttp.status===200){
					if(xmlhttp.responseXML !== null){
						arr[0] = xmlhttp.responseXML.getElementByTagname("nombre").item(0);
						arr[1]= xmlhttp.responseXML.getElementByTagname("Apellido").item(0);
						arr[2]= xmlhttp.responseXML.getElementByTagname("Edad").item(0);
						reslutado.innerHTML=arr[0].firstChild.nodeValue + " "  +
											arr[1].firstChild.nodeValue  + "tiene " +
											arr[2].firstChild.nodeValue + "años";

					}
				}
			}


xmlhttp.open("GET", "data.xml", true);
xmlhttp.send();
}

	</script>



</body>
</html>





