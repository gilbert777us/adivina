<?php
require_once('dbutils2.php');
session_start();

session_unset(); 


$db = conectarDB();
comprobarUsu();
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
function assign_rand_value($num) {

    // accepts 1 - 36
    switch($num) {
        case "1"  : $rand_value = "A"; break;
        case "2"  : $rand_value = "B"; break;
        case "3"  : $rand_value = "C"; break;
        case "4"  : $rand_value = "D"; break;
        case "5"  : $rand_value = "E"; break;
        case "6"  : $rand_value = "F"; break;
        case "7"  : $rand_value = "G"; break;
        case "8"  : $rand_value = "H"; break;
        case "9"  : $rand_value = "I"; break;
        case "10" : $rand_value = "J"; break;
        case "11" : $rand_value = "K"; break;
        case "12" : $rand_value = "L"; break;
        case "13" : $rand_value = "M"; break;
        case "14" : $rand_value = "N"; break;
        case "15" : $rand_value = "O"; break;
        case "16" : $rand_value = "P"; break;
        case "17" : $rand_value = "Q"; break;
        case "18" : $rand_value = "R"; break;
        case "19" : $rand_value = "S"; break;
        case "20" : $rand_value = "T"; break;
        case "21" : $rand_value = "U"; break;
        case "22" : $rand_value = "V"; break;
        case "23" : $rand_value = "W"; break;
        case "24" : $rand_value = "X"; break;
        case "25" : $rand_value = "Y"; break;
        case "26" : $rand_value = "Z"; break;
        case "27" : $rand_value = "0"; break;
        case "28" : $rand_value = "1"; break;
        case "29" : $rand_value = "2"; break;
        case "30" : $rand_value = "3"; break;
        case "31" : $rand_value = "4"; break;
        case "32" : $rand_value = "5"; break;
        case "33" : $rand_value = "6"; break;
        case "34" : $rand_value = "7"; break;
        case "35" : $rand_value = "8"; break;
        case "36" : $rand_value = "9"; break;
    }
    return $rand_value;
}
function codificarCarta($carta)
{
    $ret="";
    for ($i=0; $i < 25; $i++) 
    { 
        $ret.=assign_rand_value(rand(1,36));
    }
    $tam = strlen ($carta);
    if ($tam==3)
    {
        $ret[1]="1";
        $carta[1]=$carta[2];
    }
    else
    {
        $ret[1]=$carta[0];
    }
       
    switch ($carta[1]) {
        case 'P':
            $ret[3]="0";
            break;
        case 'C':
            $ret[3]="1";
            break;
        case 'T':
            $ret[3]="2";
            break;
        case 'D':
            $ret[3]="3";
            break;
    }
    return $ret;
}

function comprobarUsu()
{
    global $db;
    $ip= get_ip_address();
    $cod=$ip.'--'.$_SERVER['HTTP_USER_AGENT'];
    $codMd5= md5($cod);
    $fila=getHistoria($db,$codMd5);
    if (isset($fila["fecha"]))
    {
        $fini=$fila["fecha"];
        $fini2 = strtotime($fini);
        $now = time();
        $difference = $now - $fini2;
        $minutes = floor($difference / 60);
        // Un día o reset
        if (($minutes>1440)||isset($_GET["reset"]))
        {
            cerrarHistoria($db,$codMd5);
            $_SESSION["entrar"]=1;
            header("Location:UJ7L6K1J4HF32Y495HG5B5V3A.php");
        }
        else
        {
            $_SESSION["entrar"]=2;
            header("Location:UJ7L6K2J4HF32Y495HG5B5V3A.php?c=".codificarCarta($fila["carta"]));
        }
    }
    else
    {
        $_SESSION["entrar"]=1;
        header("Location:UJ7L6K1J4HF32Y495HG5B5V3A.php");
    }
}


?>