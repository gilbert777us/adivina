<!DOCTYPE HTML>  
<?php 		
  	session_start();
  	if ($_SESSION["entrar"]==2)
    {
        header("Location:UJ7L6K0J4HF32Y495HG5B5V3A.php");
    }


  $mostrarTexto=0;
    		?>
<html>
	<head>
		<title>Poker Suave</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<script>
    		function cambiar(index) {
    			if ((index!=document.getElementById('index1').value)
    				&&
    				(index!=document.getElementById('index2').value)
    				&&
    				(index!=document.getElementById('index3').value)
    				&&
    				(index!=document.getElementById('index4').value)
    				&&
    				(index!=document.getElementById('index5').value)
    				)
    			{
    			document.getElementById('cont').value=Number(document.getElementById('cont').value) + 1;
    			if (document.getElementById('cont').value==1)
    			{
    				document.getElementById('index1').value=index;
    			}
    			else if (document.getElementById('cont').value==2)
    			{
    				document.getElementById('index2').value=index;
    			}
    			else if (document.getElementById('cont').value==3)
    			{
    				document.getElementById('index3').value=index;
    			}
    			else if (document.getElementById('cont').value==4)
    			{
    				document.getElementById('index4').value=index;
    			}
    			else if (document.getElementById('cont').value==5)
    			{
    				document.getElementById('index5').value=index;
    			}
    			document.getElementById('theForm').action="UJ7L6K3J4HF32Y495HG5B5V3A.php";
    			document.getElementById('theForm').submit();4
    		}
    		}
    		function cargarImagenes() 
    		{
    			//alert('cargar!');
    			<?php 
    			if ((isset($_POST["index1"]))&&($_POST["index1"]!=''))
    			{
				if ($_POST["index1"]==-1) $_POST["index1"]=0;
    				echo "document.getElementById('i".$_POST['index1']."').src='recursos/".$_SESSION["cartas"][0].".png';";
    			if ($_POST["index1"]==0) $_POST["index1"]=-1;

    			}	
    			if ((isset($_POST["index2"]))&&($_POST["index2"]!=''))
    			{
				if ($_POST["index2"]==-1) $_POST["index2"]=0;
    				echo "document.getElementById('i".$_POST['index2']."').src='recursos/".$_SESSION["cartas"][1].".png';";
 				if ($_POST["index2"]==0) $_POST["index2"]=-1;
    			}	
    			if ((isset($_POST["index3"]))&&($_POST["index3"]!=''))
    			{
				if ($_POST["index3"]==-1) $_POST["index3"]=0;
    				echo "document.getElementById('i".$_POST['index3']."').src='recursos/".$_SESSION["cartas"][2].".png';";
				if ($_POST["index3"]==0) $_POST["index3"]=-1;
    			}	
    			if ((isset($_POST["index4"]))&&($_POST["index4"]!=''))
    			{
 				if ($_POST["index4"]==-1) $_POST["index4"]=0;
   				echo "document.getElementById('i".$_POST['index4']."').src='recursos/".$_SESSION["cartas"][3].".png';";
				if ($_POST["index4"]==0) $_POST["index4"]=-1;
    			}	
    			if ((isset($_POST["index5"]))&&($_POST["index5"]!=''))
    			{
 				if ($_POST["index5"]==-1) $_POST["index5"]=0;
   				echo "document.getElementById('i".$_POST['index5']."').src='recursos/".$_SESSION["cartas"][4].".png';";
    				$mostrarTexto=1;
    			if ($_POST["index1"]==-1) $_POST["index1"]=0;
   				if ($_POST["index2"]==-1) $_POST["index2"]=0;
   				if ($_POST["index3"]==-1) $_POST["index3"]=0;
   				if ($_POST["index4"]==-1) $_POST["index4"]=0;
   					
    				unset($_SESSION["posicionesCartas"]);
    				$_SESSION["posicionesCartas"][]=$_POST["index1"];
    				$_SESSION["posicionesCartas"][]=$_POST["index2"];
    				$_SESSION["posicionesCartas"][]=$_POST["index3"];
    				$_SESSION["posicionesCartas"][]=$_POST["index4"];
    				$_SESSION["posicionesCartas"][]=$_POST["index5"];
    			}	
    			?>
    			if(window.innerHeight > window.innerWidth)
				{
		    		alert("Para ver todo mejor pon tu dispositivo en horizontal");
				}
    		}
    		
    	</script>
    	<style type='text/css'>
			#capa12{
				position: absolute;
				margin: auto;
				background-color: #fff;
				opacity: 0.9;
				z-index: 15;
				top:150px;
				left: 550px;
				
				width:480px;
				height:135px;
				border:2px solid #000;
				padding:10px;
  				border-radius: 30px;

				<?php
				function modificarPosiciones()
				{
					if (
						!in_array("0", $_SESSION["posicionesCartas"])
						&&
						!in_array("1", $_SESSION["posicionesCartas"])
						&&
						!in_array("2", $_SESSION["posicionesCartas"])
						&&
						!in_array("3", $_SESSION["posicionesCartas"])
						&&
						!in_array("4", $_SESSION["posicionesCartas"])
						) 
					{
					    echo " top:1px; left: 1px; ";
					}
					else if (
						!in_array("13", $_SESSION["posicionesCartas"])
						&&
						!in_array("14", $_SESSION["posicionesCartas"])
						&&
						!in_array("15", $_SESSION["posicionesCartas"])
						&&
						!in_array("16", $_SESSION["posicionesCartas"])
						&&
						!in_array("17", $_SESSION["posicionesCartas"])
						) 
					{
					    echo " top:155px; left: 1px; ";
					}
					else if (
						!in_array("26", $_SESSION["posicionesCartas"])
						&&
						!in_array("27", $_SESSION["posicionesCartas"])
						&&
						!in_array("28", $_SESSION["posicionesCartas"])
						&&
						!in_array("29", $_SESSION["posicionesCartas"])
						&&
						!in_array("30", $_SESSION["posicionesCartas"])
						) 
					{
					    echo " top:310px; left: 1px; ";
					}
					else if (
						!in_array("39", $_SESSION["posicionesCartas"])
						&&
						!in_array("40", $_SESSION["posicionesCartas"])
						&&
						!in_array("41", $_SESSION["posicionesCartas"])
						&&
						!in_array("42", $_SESSION["posicionesCartas"])
						&&
						!in_array("43", $_SESSION["posicionesCartas"])
						) 
					{
					    echo " top:465px; left: 1px; ";
					}
					else if (
						!in_array("5", $_SESSION["posicionesCartas"])
						&&
						!in_array("6", $_SESSION["posicionesCartas"])
						&&
						!in_array("7", $_SESSION["posicionesCartas"])
						&&
						!in_array("8", $_SESSION["posicionesCartas"])
						&&
						!in_array("9", $_SESSION["posicionesCartas"])
						) 
					{
					    echo " top:1px; left: 550px; ";
					}
					else if (
						!in_array("18", $_SESSION["posicionesCartas"])
						&&
						!in_array("19", $_SESSION["posicionesCartas"])
						&&
						!in_array("20", $_SESSION["posicionesCartas"])
						&&
						!in_array("21", $_SESSION["posicionesCartas"])
						&&
						!in_array("22", $_SESSION["posicionesCartas"])
						) 
					{
					    echo " top:155px; left: 550px; ";
					}
					else if (
						!in_array("31", $_SESSION["posicionesCartas"])
						&&
						!in_array("32", $_SESSION["posicionesCartas"])
						&&
						!in_array("33", $_SESSION["posicionesCartas"])
						&&
						!in_array("34", $_SESSION["posicionesCartas"])
						&&
						!in_array("35", $_SESSION["posicionesCartas"])
						) 
					{
					    echo " top:310px; left: 550px; ";
					}
					else if (
						!in_array("44", $_SESSION["posicionesCartas"])
						&&
						!in_array("45", $_SESSION["posicionesCartas"])
						&&
						!in_array("46", $_SESSION["posicionesCartas"])
						&&
						!in_array("47", $_SESSION["posicionesCartas"])
						&&
						!in_array("48", $_SESSION["posicionesCartas"])
						) 
					{
					    echo " top:465px; left: 550px; ";
					}

				}
				modificarPosiciones();
				

				if ($mostrarTexto!=1){
						echo ' visibility: hidden;';
					}
				?>
			}
		</style>
	</head>
	<body onload="cargarImagenes()">  
 	<?php   //var_dump($_SESSION);?>
		<form method="post" id="theForm" action="UJ7L6K4J4HF32Y495HG5B5V3A.php"> 
			<input type='hidden' id= 'hiddenField' name='id' value='' />
			<input type="hidden" id="cont" name="cont" value="<?php if (isset($_POST['cont'])) echo $_POST['cont']?>">
			<input type="hidden" id="index1" name="index1" value="<?php if (isset($_POST['index1'])) echo $_POST['index1']?>">
			<input type="hidden" id="index2" name="index2" value="<?php if (isset($_POST['index2'])) echo $_POST['index2']?>">
			<input type="hidden" id="index3" name="index3" value="<?php if (isset($_POST['index3'])) echo $_POST['index3']?>">
			<input type="hidden" id="index4" name="index4" value="<?php if (isset($_POST['index4'])) echo $_POST['index4']?>">
			<input type="hidden" id="index5" name="index5" value="<?php if (isset($_POST['index5'])) echo $_POST['index5']?>">

			<div id="capa12">
				<h2>&nbsp;&nbsp;Piensa fuertemente en una</h2>			
				<input class="boton" type="submit" name="jugar" value="de las cartas y pulsa Aquí">
			</div>
			<div class="top-demo group">
				<table align="center" cellpadding="5" bgcolor="#145a32">
					<tr>
						<td><img id="i0" src="recursos/dorso.png" onclick="cambiar(-1)"> </td>
						<td><img id="i1" src="recursos/dorso.png" onclick="cambiar(1)"> </td>
						<td><img id="i2" src="recursos/dorso.png" onclick="cambiar(2)"> </td>
						<td><img id="i3" src="recursos/dorso.png" onclick="cambiar(3)"> </td>
						<td><img id="i4" src="recursos/dorso.png" onclick="cambiar(4)"> </td>
						<td><img id="i5" src="recursos/dorso.png" onclick="cambiar(5)"> </td>
						<td><img id="i6" src="recursos/dorso.png" onclick="cambiar(6)"> </td>
						<td><img id="i7" src="recursos/dorso.png" onclick="cambiar(7)"> </td>
						<td><img id="i8" src="recursos/dorso.png" onclick="cambiar(8)"> </td>
						<td><img id="i9" src="recursos/dorso.png" onclick="cambiar(9)"> </td>
						<td><img id="i10" src="recursos/dorso.png" onclick="cambiar(10)"> </td>
						<td><img id="i11" src="recursos/dorso.png" onclick="cambiar(11)"> </td>
						<td><img id="i12" src="recursos/dorso.png" onclick="cambiar(12)"> </td>
					</tr>
					<tr>
						<td><img id="i13" src="recursos/dorso.png" onclick="cambiar(13)"> </td>
						<td><img id="i14" src="recursos/dorso.png" onclick="cambiar(14)"> </td>
						<td><img id="i15" src="recursos/dorso.png" onclick="cambiar(15)"> </td>
						<td><img id="i16" src="recursos/dorso.png" onclick="cambiar(16)"> </td>
						<td><img id="i17" src="recursos/dorso.png" onclick="cambiar(17)"> </td>
						<td><img id="i18" src="recursos/dorso.png" onclick="cambiar(18)"> </td>
						<td><img id="i19" src="recursos/dorso.png" onclick="cambiar(19)"> </td>
						<td><img id="i20" src="recursos/dorso.png" onclick="cambiar(20)"> </td>
						<td><img id="i21" src="recursos/dorso.png" onclick="cambiar(21)"> </td>
						<td><img id="i22" src="recursos/dorso.png" onclick="cambiar(22)"> </td>
						<td><img id="i23" src="recursos/dorso.png" onclick="cambiar(23)"> </td>
						<td><img id="i24" src="recursos/dorso.png" onclick="cambiar(24)"> </td>
						<td><img id="i25" src="recursos/dorso.png" onclick="cambiar(25)"> </td>
					</tr>
					<tr>
						<td><img id="i26" src="recursos/dorso.png" onclick="cambiar(26)"> </td>
						<td><img id="i27" src="recursos/dorso.png" onclick="cambiar(27)"> </td>
						<td><img id="i28" src="recursos/dorso.png" onclick="cambiar(28)"> </td>
						<td><img id="i29" src="recursos/dorso.png" onclick="cambiar(29)"> </td>
						<td><img id="i30" src="recursos/dorso.png" onclick="cambiar(30)"> </td>
						<td><img id="i31" src="recursos/dorso.png" onclick="cambiar(31)"> </td>
						<td><img id="i32" src="recursos/dorso.png" onclick="cambiar(32)"> </td>
						<td><img id="i33" src="recursos/dorso.png" onclick="cambiar(33)"> </td>
						<td><img id="i34" src="recursos/dorso.png" onclick="cambiar(34)"> </td>
						<td><img id="i35" src="recursos/dorso.png" onclick="cambiar(35)"> </td>
						<td><img id="i36" src="recursos/dorso.png" onclick="cambiar(36)"> </td>
						<td><img id="i37" src="recursos/dorso.png" onclick="cambiar(37)"> </td>
						<td><img id="i38" src="recursos/dorso.png" onclick="cambiar(38)"> </td>
					</tr>
					<tr>
						<td><img id="i39" src="recursos/dorso.png" onclick="cambiar(39)"> </td>
						<td><img id="i40" src="recursos/dorso.png" onclick="cambiar(40)"> </td>
						<td><img id="i41" src="recursos/dorso.png" onclick="cambiar(41)"> </td>
						<td><img id="i42" src="recursos/dorso.png" onclick="cambiar(42)"> </td>
						<td><img id="i43" src="recursos/dorso.png" onclick="cambiar(43)"> </td>
						<td><img id="i44" src="recursos/dorso.png" onclick="cambiar(44)"> </td>
						<td><img id="i45" src="recursos/dorso.png" onclick="cambiar(45)"> </td>
						<td><img id="i46" src="recursos/dorso.png" onclick="cambiar(46)"> </td>
						<td><img id="i47" src="recursos/dorso.png" onclick="cambiar(47)"> </td>
						<td><img id="i48" src="recursos/dorso.png" onclick="cambiar(48)"> </td>
						<td><img id="i49" src="recursos/dorso.png" onclick="cambiar(49)"> </td>
						<td><img id="i50" src="recursos/dorso.png" onclick="cambiar(50)"> </td>
						<td><img id="i51" src="recursos/dorso.png" onclick="cambiar(51)"> </td>
					</tr>	
				</table>
			</div>
		</form>
	</body>
</html>