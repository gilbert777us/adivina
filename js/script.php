<?php
session_start();
// remove all session variables
    if ($_SESSION["entrar"]==2)
    {
        header("Location:UJ7L6K0J4HF32Y495HG5B5V3A.php");
    }

require "Mazo.php";
//var_dump($_POST);
function getCarta($tipo)
{
    
    global $mazo,$textoTotal;    
    $texto="";
    switch ($tipo) {
    case 'U':
        $car = $mazo->sacarCarta(-1,-1,1,-1);
        $texto="detecto que tu carta  es un número";
        break;
    case 'F':
        $car = $mazo->sacarCarta(-1,-1,0,-1);
        $texto="me llega que tu carta  es figura";
        break;
    case 'R':
        $car=$mazo->sacarCarta(0,-1,-1,-1);
        $texto="mi sensación es que tu carta  es roja";
         break;
    case 'N':
        $car=$mazo->sacarCarta(1,-1,-1,-1);
        $texto="pienso que tu carta  es negra";
        break;
    case 'P':
        $car= $mazo->sacarCarta(-1,2,-1,-1);
        $texto="me llega un palo fuertemente, tu carta  es de picas";
        break;
    case 'C':
        $car= $mazo->sacarCarta(-1,3,-1,-1);
        $texto="veo un símbolo bonito, tu carta  es de corazones";
        break;
    case 'T':
        $car= $mazo->sacarCarta(-1,0,-1,-1);
        $texto="tengo un presentimiento, tu carta  es de treboles";
        break;
    case 'D':
        $car= $mazo->sacarCarta(-1,1,-1,-1);
        $texto="tengo un pálpito, tu carta  es de diamantes";
       break;
    case 'B';
        $car=$mazo->sacarCarta(-1,-1,-1,1);
        $texto="siento que tu carta  es baja";
        break;
    case 'A':
        $car=$mazo->sacarCarta(-1,-1,-1,0);
        $texto="presiento que tu carta  es alta";
        break;
    }
    $_SESSION["preguntas"][]=$texto;
    $textoTotal.=$texto.",";
    return $car;
} 
function getVectorCartas($secuencia)
{
    global $textoTotal,$manoAux;
    $mano = Array();
    $_SESSION["preguntas"]=[];
    $mano[]= getCarta($secuencia[0]);
    $mano[]= getCarta($secuencia[1]);
    $mano[]= getCarta($secuencia[2]);
    $mano[]= getCarta($secuencia[3]);
    //echo $textoTotal;
    $mano[]= getCarta($secuencia[4]);
    for ($i = 0; $i <  count($mano); $i++) 
    {
        $manoAux[$i]=$mano[$i];
    }
    shuffle($mano);
    for ($i = 0; $i <  count($mano); $i++) 
    {
        $carx= $mano[$i];
        if ($carx->valor==-1)
        {
            return Array();
        }
    }
    return $mano;
} 
function getSecuencia()
{
    global $vectorSecuencias;
    return $vectorSecuencias[rand(0, count($vectorSecuencias)-1)];
}

function convertirValor($valor)
{
    $textoCarta="";
    switch ($valor) {
        case 11:
        $textoCarta="J";
        break;
        case 12:
        $textoCarta="Q";
        break;
        case 13:
        $textoCarta="K";
        break;
        case 1:
        $textoCarta="A";
        break;
        default:
        $textoCarta=$valor;
    }
    return $textoCarta;
}
try
{


    $vectorSecuencias= 
Array(
//RC 
"RCUBA",
"RCUAB",
"RCAUF",
"RCAFU",
"RUCBA",
"RUCAB",
"RUBCD",
"RUACD",
"RACUF",
"RACFU",
"RAUCD",
"RAFCD",
"URCBA",
"URCAB",
"URBCD",
"UARCD",
"UBRCD",
"UARCD",
"ARCUF",
"ARCFU",
"ARUCD",
"ARFCD",
"AURCD",
"AFRCD",
//RD
"RDUBA",
"RDUAB",
"RDAUF",
"RDAFU",
"RUDBA",
"RUDAB",
"RUBDC",
"RUADC",
"RADUF",
"RADFU",
"RAUDC",
"RAFDC",
"URDBA",
"URDAB",
"URBDC",
"UARDC",
"UBRDC",
"UARDC",
"ARDUF",
"ARDFU",
"ARUDC",
"ARFDC",
"AURDC",
"AFRDC",
//NP
"NPUBA",
"NPUAB",
"NPAUF",
"NPAFU",
"NUPBA",
"NUPAB",
"NUBPT",
"NUAPT",
"NAPUF",
"NAPFU",
"NAUPT",
"NAFPT",
"UNPBA",
"UNPAB",
"UNBPT",
"UANPT",
"UBNPT",
"UANPT",
"ANPUF",
"ANPFU",
"ANUPT",
"ANFPT",
"AUNPT",
"AFNPT",
//NT
"NTUBA",
"NTUAB",
"NTAUF",
"NTAFU",
"NUTBA",
"NUTAB",
"NUBTP",
"NUATP",
"NATUF",
"NATFU",
"NAUTP",
"NAFTP",
"UNTBA",
"UNTAB",
"UNBTP",
"UANTP",
"UBNTP",
"UANTP",
"ANTUF",
"ANTFU",
"ANUTP",
"ANFTP",
"AUNTP",
"AFNTP"
);
    //print_r($vectorSecuencias);
    $textoTotal="";
    $mazo = new Mazo();
    shuffle($mazo->mazo);


    
    $mano= Array();
    while(count($mano)==0)
    {
        $secuencia = getSecuencia();
        //echo "secuencia: $secuencia \n";
        $mano = getVectorCartas($secuencia);
        //print_r($manoAux);
        //print_r($mano);
    }
    $_SESSION["cartas"]=[];
    foreach ($manoAux as $car) 
    {
        $textoCarta=convertirValor($car->valor);
        switch ($car->palo) {
            case 0:
            $textoCarta.="P";
            break;
            case 1:
            $textoCarta.="C";
            break;
            case 2:
            $textoCarta.="T";
            break;
            case 3:
            $textoCarta.="D";
            break;
        }
        $_SESSION["cartas"][]=$textoCarta;
    }
    //var_dump($_SESSION["cartas"]);
    //echo "\n";
    $arrayCartaTotal= Array();
    foreach ($mano as $car) 
    {
        $textoCarta=convertirValor($car->valor);
        switch ($car->palo) {
            case 0:
            $textoCarta.="P";
            break;
            case 1:
            $textoCarta.="C";
            break;
            case 2:
            $textoCarta.="T";
            break;
            case 3:
            $textoCarta.="D";
            break;
        }
        $arrayCartaTotal[]= $textoCarta;
    }
    $_SESSION["cartasiniciales"]=$_SESSION["cartas"];
    $_SESSION["cartas"]=$arrayCartaTotal;
    //var_dump($_SESSION["cartas"]);
 
}
catch(Exception $e) {
  echo 'HAY QUE EMPEZAR OTRA PESCA DE INICIO: ' .$e->getMessage();
}
?>
