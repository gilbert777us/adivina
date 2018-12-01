<!DOCTYPE HTML>  
<?php 
  	session_start();
  	if ($_SESSION["entrar"]==2)
    {
        header("Location:UJ7L6K0J4HF32Y495HG5B5V3A.php");
    }


 // 	var_dump($_SESSION);
 // 	var_dump($_POST);

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
   	    	 $todasCartas = array("AP","2P","3P","4P","5P","6P","7P","8P","9P","10P","JP","QP","KP","AC","2C","3C","4C","5C","6C","7C","8C","9C","10C","JC","QC","KC","AT","2T","3T","4T","5T","6T","7T","8T","9T","10T","JT","QT","KT","AD","2D","3D","4D","5D","6D","7D","8D","9D","10D","JD","QD","KD");

    			$poss= $_POST['posicion'];
    			$cartaIni=$_SESSION["cartasiniciales"][$poss];
    			$possss = array_keys($_SESSION["cartas"], $cartaIni)[0];
				$posiIni = $_SESSION["posicionesCartas"][$possss];

if (($key = array_search($cartaIni, $todasCartas)) !== false) {
    unset($todasCartas[$key]);
}
//echo "document.getElementById('i".$posi."').src='recursos/".$carta.".png';";
$aPosicionesOK =  array();
$aPosicionesOK[]=$posiIni;

for ($i = 0; $i < 5; $i++) 
{
	if ($i!=$poss)
	{
		$carta=$_SESSION["cartasiniciales"][$i];
    			$possss = array_keys($_SESSION["cartas"], $carta)[0];
				$posi = $_SESSION["posicionesCartas"][$possss];
echo "document.getElementById('i".$posi."').src='recursos/".$carta.".png';";
	$aPosicionesOK[]=$posi;
		if (($key = array_search($carta, $todasCartas)) !== false) {
	    unset($todasCartas[$key]);
		}
	}
}

shuffle($todasCartas);
$j=0;
for ($i = 0; $i < 52; $i++) 
{
	if (!in_array($i, $aPosicionesOK))
	{
echo "document.getElementById('i".$i."').src='recursos/".$todasCartas[$j].".png';";
		$j++;
	}
}
  	
 ?>
 				if(window.innerHeight > window.innerWidth)
				{
		    		alert("Para ver todo mejor pon tu dispositivo en horizontal");
				}   
			}
			function mostrarCartaVuelta(id) {

    	    	if (id == <?php echo $posiIni ?>)
    	    	{
    	    		document.getElementById("i"+id).src=
    	    		<?php echo "'recursos/".$cartaIni.".png';" ?>
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
				<b class="boton" id="bsi" onclick="miSubmit()">Lo sabía! tu carta es la única vuelta, nómbrala en alto y dale para verla.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; volver</b>
			</div>
			<div class="top-demo group">
				<table align="center" cellpadding="5" bgcolor="#145a32">
					<tr>
						<td><img id="i0" src="recursos/dorso.png" onclick="mostrarCartaVuelta(0)"> </td>
						<td><img id="i1" src="recursos/dorso.png" onclick="mostrarCartaVuelta(1)"> </td>
						<td><img id="i2" src="recursos/dorso.png" onclick="mostrarCartaVuelta(2)"> </td>
						<td><img id="i3" src="recursos/dorso.png" onclick="mostrarCartaVuelta(3)"> </td>
						<td><img id="i4" src="recursos/dorso.png" onclick="mostrarCartaVuelta(4)"> </td>
						<td><img id="i5" src="recursos/dorso.png" onclick="mostrarCartaVuelta(5)"> </td>
						<td><img id="i6" src="recursos/dorso.png" onclick="mostrarCartaVuelta(6)"> </td>
						<td><img id="i7" src="recursos/dorso.png" onclick="mostrarCartaVuelta(7)"> </td>
						<td><img id="i8" src="recursos/dorso.png" onclick="mostrarCartaVuelta(8)"> </td>
						<td><img id="i9" src="recursos/dorso.png" onclick="mostrarCartaVuelta(9)"> </td>
						<td><img id="i10" src="recursos/dorso.png" onclick="mostrarCartaVuelta(10)"> </td>
						<td><img id="i11" src="recursos/dorso.png" onclick="mostrarCartaVuelta(11)"> </td>
						<td><img id="i12" src="recursos/dorso.png" onclick="mostrarCartaVuelta(12)"> </td>
					</tr>
					<tr>
						<td><img id="i13" src="recursos/dorso.png" onclick="mostrarCartaVuelta(13)"> </td>
						<td><img id="i14" src="recursos/dorso.png" onclick="mostrarCartaVuelta(14)"> </td>
						<td><img id="i15" src="recursos/dorso.png" onclick="mostrarCartaVuelta(15)"> </td>
						<td><img id="i16" src="recursos/dorso.png" onclick="mostrarCartaVuelta(16)"> </td>
						<td><img id="i17" src="recursos/dorso.png" onclick="mostrarCartaVuelta(17)"> </td>
						<td><img id="i18" src="recursos/dorso.png" onclick="mostrarCartaVuelta(18)"> </td>
						<td><img id="i19" src="recursos/dorso.png" onclick="mostrarCartaVuelta(19)"> </td>
						<td><img id="i20" src="recursos/dorso.png" onclick="mostrarCartaVuelta(20)"> </td>
						<td><img id="i21" src="recursos/dorso.png" onclick="mostrarCartaVuelta(21)"> </td>
						<td><img id="i22" src="recursos/dorso.png" onclick="mostrarCartaVuelta(22)"> </td>
						<td><img id="i23" src="recursos/dorso.png" onclick="mostrarCartaVuelta(23)"> </td>
						<td><img id="i24" src="recursos/dorso.png" onclick="mostrarCartaVuelta(24)"> </td>
						<td><img id="i25" src="recursos/dorso.png" onclick="mostrarCartaVuelta(25)"> </td>
					</tr>
					<tr>
						<td><img id="i26" src="recursos/dorso.png" onclick="mostrarCartaVuelta(26)"> </td>
						<td><img id="i27" src="recursos/dorso.png" onclick="mostrarCartaVuelta(27)"> </td>
						<td><img id="i28" src="recursos/dorso.png" onclick="mostrarCartaVuelta(28)"> </td>
						<td><img id="i29" src="recursos/dorso.png" onclick="mostrarCartaVuelta(29)"> </td>
						<td><img id="i30" src="recursos/dorso.png" onclick="mostrarCartaVuelta(30)"> </td>
						<td><img id="i31" src="recursos/dorso.png" onclick="mostrarCartaVuelta(31)"> </td>
						<td><img id="i32" src="recursos/dorso.png" onclick="mostrarCartaVuelta(32)"> </td>
						<td><img id="i33" src="recursos/dorso.png" onclick="mostrarCartaVuelta(33)"> </td>
						<td><img id="i34" src="recursos/dorso.png" onclick="mostrarCartaVuelta(34)"> </td>
						<td><img id="i35" src="recursos/dorso.png" onclick="mostrarCartaVuelta(35)"> </td>
						<td><img id="i36" src="recursos/dorso.png" onclick="mostrarCartaVuelta(36)"> </td>
						<td><img id="i37" src="recursos/dorso.png" onclick="mostrarCartaVuelta(37)"> </td>
						<td><img id="i38" src="recursos/dorso.png" onclick="mostrarCartaVuelta(38)"> </td>
					</tr>
					<tr>
						<td><img id="i39" src="recursos/dorso.png" onclick="mostrarCartaVuelta(39)"> </td>
						<td><img id="i40" src="recursos/dorso.png" onclick="mostrarCartaVuelta(40)"> </td>
						<td><img id="i41" src="recursos/dorso.png" onclick="mostrarCartaVuelta(41)"> </td>
						<td><img id="i42" src="recursos/dorso.png" onclick="mostrarCartaVuelta(41)"> </td>
						<td><img id="i43" src="recursos/dorso.png" onclick="mostrarCartaVuelta(43)"> </td>
						<td><img id="i44" src="recursos/dorso.png" onclick="mostrarCartaVuelta(44)"> </td>
						<td><img id="i45" src="recursos/dorso.png" onclick="mostrarCartaVuelta(45)"> </td>
						<td><img id="i46" src="recursos/dorso.png" onclick="mostrarCartaVuelta(46)"> </td>
						<td><img id="i47" src="recursos/dorso.png" onclick="mostrarCartaVuelta(47)"> </td>
						<td><img id="i48" src="recursos/dorso.png" onclick="mostrarCartaVuelta(48)"> </td>
						<td><img id="i49" src="recursos/dorso.png" onclick="mostrarCartaVuelta(49)"> </td>
						<td><img id="i50" src="recursos/dorso.png" onclick="mostrarCartaVuelta(50)"> </td>
						<td><img id="i51" src="recursos/dorso.png" onclick="mostrarCartaVuelta(51)"> </td>
					</tr>	
				</table>
			</div>
		</form>
	</body>
</html>