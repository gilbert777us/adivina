<!DOCTYPE HTML>  
<?php 
session_start(); 
function getNombreCarta($c)
{
  	// decodificación del get de la carta
	// valor en c[1] y palo en c[3]
	// valores A234567891JQK
	// palos PCTD 0123

  $c[0]=$c[1];
  switch ($c[3]) {
  	case '0':
  		$c[1]="P";
  		break;
  	case '1':
  		$c[1]="C";
  		break;
  	case '2':
  		$c[1]="T";
  		break;
  	case '3':
  		$c[1]="D";
  		break;

  }


  $valor=$c[0];
  switch ($valor) {
    case 'A':
        $valor="el as";
        break;
    case 'J':
        $valor="la jota";
        break;
    case 'Q':
        $valor="la dama";
        break;
    case 'K':
        $valor="el rey";
        break;
    case '1':
        $valor="el 10";
        //$c[1]=$c[2];
        break;
    default:
        $valor= "el ".$valor;
  }
  $palo=$c[1];
  switch ($palo) {
    case 'P':
        $palo="picas";
        break;
    case 'C':
        $palo="corazones";
        break;
    case 'T':
        $palo="tréboles";
        break;
    case 'D':
        $palo="diamantes";
        break;
  }
  return $valor." de ".$palo;
}
function checkCarta($c)
{
	$text="...";
	if (isset($_GET["c"]))
	{
		$text=getNombreCarta($_GET["c"]);
	}
	return $text;
}
?>

<html>
	<head>
		<title>Poker Suave</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<script>
    		function miOnload() {
				if(window.innerHeight > window.innerWidth)
				{
		    		alert("Para ver todo mejor pon tu dispositivo en horizontal");
				}    			
    		}
    	</script>
	</head>
	<body onload="miOnload()">  

		<form method="post" id="theForm" action="UJ7L6K0J4HF32Y495HG5B5V3A.php"> 
			<div id="capa1">
				<h1>Poker Suave</h1>
				<h2>Vuelve a intentarlo cuando dejes de pensar en <?php echo checkCarta("c") ?>.</h2>
				<br/><br/>
				<input class="boton" type="submit" name="jugar" value="Volver">
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