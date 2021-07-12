<?php

$host = "localhost";
$usuario = "root";
$passw = "2021";
$bd = "controlTrabajadores";

$tabla_bd = "lista";

error_reporting(1);

$conexion = new mysqli($host,$usuario,$passw,$bd);

if($conexion->connect_errno){
  echo "Error de conexion..";
  exit ();

} else {

   echo "**Conexion exitosa**";
}
/*
Otra forma valida para conectar  a la base de datos
class conexion{

private $user = "root";
private $passw = "2021";


  function conectar(){

       try{
      
          $pdo = new PDO('mysql:host=localhost;dbname=listname', $this->user,$this->passw);
               echo "Conexión exitosa";
         }catch(PDOException $error){
               echo "Error de conexion a la bd";
       }
   }
 
}

$nuevaconexion = new conexion();
$nuevaconexion -> conectar();*/
?>