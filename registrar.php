<?php

include("conection.php");

 $nombre1 = $_POST['nombre'];
 $apellido1 = $_POST['apellido'];
 $edad1 = $_POST['edad'];
 $correo1 = $_POST['email'];

$insertar= ("INSERT INTO lista(name1,apellido,edad,correo) VALUES('$nombre1','$apellido1','$edad1','$correo1')");

$resultado= mysqli_query($conexion,$insertar);

if($resultado){

 echo "<br>Usuario registrado exitosamente";
} else {

echo "<br>No se pudo registrar el usuario";

}

?>