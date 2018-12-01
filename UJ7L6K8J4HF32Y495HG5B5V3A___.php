<?php 
  	session_start();
  	    if ($_SESSION["entrar"]==2)
    {
        header("Location:UJ7L6K0J4HF32Y495HG5B5V3A.php");
    }

    $_SESSION["preguntas"][$_POST["posicion"]] = str_replace("  ", " no ", $_SESSION["preguntas"][$_POST["posicion"]]);
    include "comun.php";    

?>
<html>
	<head>
		<title>Poker Suave</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">		
    	<script>
    		function miSubmit(ine) {
    			document.getElementById('posicion').value='<?php echo $_POST["posicion"]?>';
    			document.getElementById('theForm').action="UJ7L6K8J4HF32Y495HG5B5V3A<?php echo getFinal(2)?>.php";
    			document.getElementById('theForm').submit();
			}
			function miOnloadKO() {
				alert("¿Estás seguro de lo que has contestado? Piensalo bien...");
    		}    		
    	</script>

	</head>
	<body onload="miOnloadKO()"> 

		<form method="post" id="theForm" action="UJ7L6K3J4HF32Y495HG5B5V3A.php"> 
			<input type="hidden" id="posicion" name="posicion" value="">
			<div id="capa1">
				<h1>Poker Suave</h1>
				<h2>Gilbertrón dice:</h2>
				<h2><?php echo $_SESSION["preguntas"][$_POST["posicion"]]?></h2>
				
				<br/><br/>
				<b class="boton" id="bsi" onclick="miSubmit('si')">sí</b>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<b class="boton" id="bno" onclick="miSubmit('no')">no</b>
			</div>
			<div class="top-demo group">
				<table align="center" cellpadding="5" bgcolor="#145a32">
					<tr>
						<td><img id="0" src="recursos/dorso.png"> </td>
						<td><img id="1" src="recursos/dorso.png"> </td>
						<td><img id="2" src="recursos/dorso.png"> </td>
						<td><img id="3" src="recursos/dorso.png"> </td>
						<td><img id="4" src="recursos/dorso.png"> </td>
						<td><img id="5" src="recursos/dorso.png"> </td>
						<td><img id="6" src="recursos/dorso.png"> </td>
						<td><img id="7" src="recursos/dorso.png"> </td>
						<td><img id="8" src="recursos/dorso.png"> </td>
						<td><img id="9" src="recursos/dorso.png"> </td>
						<td><img id="10" src="recursos/dorso.png"> </td>
						<td><img id="11" src="recursos/dorso.png"> </td>
						<td><img id="12" src="recursos/dorso.png"> </td>
					</tr>
					<tr>
						<td><img id="13" src="recursos/dorso.png"> </td>
						<td><img id="14" src="recursos/dorso.png"> </td>
						<td><img id="15" src="recursos/dorso.png"> </td>
						<td><img id="16" src="recursos/dorso.png"> </td>
						<td><img id="17" src="recursos/dorso.png"> </td>
						<td><img id="18" src="recursos/dorso.png"> </td>
						<td><img id="19" src="recursos/dorso.png"> </td>
						<td><img id="20" src="recursos/dorso.png"> </td>
						<td><img id="21" src="recursos/dorso.png"> </td>
						<td><img id="22" src="recursos/dorso.png"> </td>
						<td><img id="23" src="recursos/dorso.png"> </td>
						<td><img id="24" src="recursos/dorso.png"> </td>
						<td><img id="25" src="recursos/dorso.png"> </td>
					</tr>
					<tr>
						<td><img id="26" src="recursos/dorso.png"> </td>
						<td><img id="27" src="recursos/dorso.png"> </td>
						<td><img id="28" src="recursos/dorso.png"> </td>
						<td><img id="29" src="recursos/dorso.png"> </td>
						<td><img id="30" src="recursos/dorso.png"> </td>
						<td><img id="31" src="recursos/dorso.png"> </td>
						<td><img id="32" src="recursos/dorso.png"> </td>
						<td><img id="33" src="recursos/dorso.png"> </td>
						<td><img id="34" src="recursos/dorso.png"> </td>
						<td><img id="35" src="recursos/dorso.png"> </td>
						<td><img id="36" src="recursos/dorso.png"> </td>
						<td><img id="37" src="recursos/dorso.png"> </td>
						<td><img id="38" src="recursos/dorso.png"> </td>
					</tr>
					<tr>
						<td><img id="39" src="recursos/dorso.png"> </td>
						<td><img id="40" src="recursos/dorso.png"> </td>
						<td><img id="41" src="recursos/dorso.png"> </td>
						<td><img id="42" src="recursos/dorso.png"> </td>
						<td><img id="43" src="recursos/dorso.png"> </td>
						<td><img id="44" src="recursos/dorso.png"> </td>
						<td><img id="45" src="recursos/dorso.png"> </td>
						<td><img id="46" src="recursos/dorso.png"> </td>
						<td><img id="47" src="recursos/dorso.png"> </td>
						<td><img id="48" src="recursos/dorso.png"> </td>
						<td><img id="49" src="recursos/dorso.png"> </td>
						<td><img id="50" src="recursos/dorso.png"> </td>
						<td><img id="51" src="recursos/dorso.png"> </td>
					</tr>	
				</table>
			</div>
		</form>
	</body>
</html>