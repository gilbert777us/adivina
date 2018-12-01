<!DOCTYPE HTML PUBLIC>
<html><head>
<?php 
session_start(); 

  if ($_SESSION["entrar"]==2)
  {
      header("Location:UJ7L6K0J4HF32Y495HG5B5V3A.php");
  }
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

function getNombreCarta($c)
{

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
        $c[1]=$c[2];
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
function checkCarta()
{
	$poss= $_POST['posicion'];
  $carta=$_SESSION["cartasiniciales"][$poss];
  $text=getNombreCarta($carta);
	return $text;
}
?>

<title>404 Not Found</title>
</head><body>
<h1>HTTP 404 Página no encontrada</h1>
<h2>Problema producido por pensar en <b style="font-size: 50px">[<?php echo checkCarta() ?>]</b>.</h2>
<hr>
<address>Apache/2.4.35 (Win64) PHP/7.2.10 Server</address>
</body></html>