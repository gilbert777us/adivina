<!DOCTYPE HTML>  
<?php 
  	session_start();
  	    if ($_SESSION["entrar"]==2)
    {
        header("Location:UJ7L6K0J4HF32Y495HG5B5V3A.php");
    }



  //	var_dump($_SESSION);
  //	var_dump($_POST);

  	require_once('dbutils2.php');
	$db = conectarDB();
	
	function get_ip_address(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe

                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                    return $ip;
		                }
		            }
		        }
		    }
		}

$ip= get_ip_address();
$cod=$ip.'--'.$_SERVER['HTTP_USER_AGENT'];
$poss= $_POST['posicion'];
$carta=$_SESSION["cartasiniciales"][$poss];
insertarHistoria($db,$cod,$carta);

 ?>
<html>
	<head>
		<title>Poker Suave</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">		
    	<script>
    		function miSubmit() {
    			document.getElementById('theForm').action="UJ7L6K0J4HF32Y495HG5B5V3A.php";
    			document.getElementById('theForm').submit();
			}
    	    function mostrarCarta() {
    		<?php 
    			$poss= $_POST['posicion'];
    			$carta=$_SESSION["cartasiniciales"][$poss];
    			$possss = array_keys($_SESSION["cartas"], $carta)[0];
				$posi = $_SESSION["posicionesCartas"][$possss];

echo "document.getElementById('i".$posi."').src='recursos/".$carta.".png';";

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
				echo "mostrarTexto:".$mostrarTexto;
				if ($mostrarTexto!=1){
						echo ' visibility: hidden;';
					}

				// remove all session variables
				session_unset(); 
				// destroy the session 
				session_destroy(); 
				?>
			}
		</style>

	</head>
	<body onload="mostrarCarta()">  
    	 <form method="post" id="theForm" action="UJ7L6K3J4HF32Y495HG5B5V3A.php">
		<input type="hidden" id="posicion" name="posicion" value=""> 
			<div id="capa12">
				<b class="boton" id="bsi" onclick="miSubmit()">Lo sabía! estaba seguro! tu carta pensada es la que está dada la vuelta.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; volver</b>
			</div>

			<div class="top-demo group">
				<table align="center" cellpadding="5" bgcolor="#145a32">
					<tr>
						<td><img id="i0" src="recursos/dorso.png" onclick="cambiar(0)"> </td>
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
						<td><img id="i42" src="recursos/dorso.png" onclick="cambiar(41)"> </td>
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