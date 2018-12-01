<?php
function conectarDB()
{
 try 
  {
      $db = new PDO('mysql:host=localhost;dbname=pesca;charset=utf8mb4', 'root', '');
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      return $db;
  } catch(PDOException $ex) 
  {    
   echo "An Error occured! ".$ex->getMessage();
  } 
}

function getHistoria($db,$md5)
{
  $fila=array();
 try 
  {
  $stmt = $db->query("SELECT id,carta,fecha FROM historia WHERE live='1' and md5='".$md5."' order by id desc");
  $fila = $stmt->fetch(PDO::FETCH_ASSOC);
  } catch(PDOException $ex) 
  {    
   echo "An Error occured! ".$ex->getMessage();
  } 
  return $fila;
}
function cerrarHistoria($db,$codMd5)
{
  try 
  {
    $sql = "UPDATE historia SET live='0' where md5='".$codMd5."'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
  } catch(PDOException $ex) 
  {    
   echo "An Error occured! ".$ex->getMessage();
  } 
}

function insertarHistoria($db,$textoi,$cartai)
{
  try 
  {
       // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $db->prepare("INSERT INTO historia (md5, texto, fecha, live, carta, otros2) 
    VALUES (:md5, :texto, :fecha, :live, :carta, :otros2)");
    $stmt->bindParam(':md5', $md5);
    $stmt->bindParam(':texto', $texto);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':live', $live);
    $stmt->bindParam(':carta', $carta);
    $stmt->bindParam(':otros2', $otros2);

    // insert a row
    $md5 = md5($textoi);
    $texto = $textoi;
    $fecha = date('m/d/Y h:i:s a', time());
    $live = "1";
    $carta = $cartai;
    $otros2 = "";
    $stmt->execute();
  } catch(PDOException $ex) 
  {    
   echo "An Error occured! ".$ex->getMessage();
  } 
}

/*
function getJugadoresCartas($db)
{
  $vectorTotal = array();
  try
  {
   $stmt = $db->query("SELECT * FROM PARTIDA");
  while($fila = $stmt->fetch(PDO::FETCH_ASSOC)) 
  {
    $nombre= $fila['NOMBRE'];
    $carta= $fila['ID'];
    if(!isset($vectorTotal[$nombre])) {
        $vectorTotal[$nombre] = array();
    }
    $vectorTotal[$nombre][] = $carta;
  }
    } catch(PDOException $ex) 
  {    
   echo "An Error occured! ".$ex->getMessage();
  } 
  return $vectorTotal;
}


function existeJugador($nombreJugador,$db)
{
  $fila=array();
 try 
  {
  $stmt = $db->query("SELECT * FROM PARTIDA WHERE nombre='" .$nombreJugador."'");
  $fila = $stmt->fetch(PDO::FETCH_ASSOC);
  } catch(PDOException $ex) 
  {    
   echo "An Error occured! ".$ex->getMessage();
  } 
  return $fila;
}



function borrarPartida($db)
{
 try 
  {
   $sql = "DELETE FROM PARTIDA";
   $db->exec($sql);
  } catch(PDOException $ex) 
  {    
   echo "An Error occured! ".$ex->getMessage();
  } 
}



function borrarManoJugador($nombreJugador,$db)
{
 try 
  {
   $sql = "DELETE FROM PARTIDA WHERE nombre='" .$nombreJugador."'";
   $db->exec($sql);
  } catch(PDOException $ex) 
  {    
   echo "An Error occured! ".$ex->getMessage();
  } 
}
*/
?>
