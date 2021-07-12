<title>registro de usuarios</title>

<center><h2><font color="mediumblue">Propietario</font color></h2></center>


<form method="POST" action="registrar.php"><center>
    <div class="form-group">
    <label for="nomb">Nombre:</label>
    <input type="text" name="nombre" class="form-control" id="nomb">
    </div><br>
    
    <div class="form-group">
    <label for="apell">Apellido:</label>
    <input type="text" name="apellido" class="form-control" id="apell">
    </div><br>
    
    <div class="form-group">
    <label for="edad">Edad:</label>
    <input type="number" name="edad" class="form-control" id="edad">
    </div><br>

    <div class="form-group">
    <label for="email">Correo:</label>
    <input type="text" name="email" class="form-control" id="email">
    </div><br>

     <input type="submit" value="enviar" name="boton1">
</center>
</form>

<?php


if(isset($_POST['boton1']))
{
 include("conection.php");
 
 $nombre1 = $_POST['nombre'];
 $apellido1 = $_POST['apellido'];
 $edad1 = $_POST['edad'];
 $correo1 = $_POST['email'];

 //                                       elementos de la bd                   añade los datos de las variables creadas
  $conexion->query("INSERT INTO $tabla_bd(name1,apellido,edad,correo) VALUES ('$nombre1','$apellido1','$edad1','$correo1')");

  include("cerrarconexion.php");
  echo "Datos insertados correctamente";

}

//$resulado = mysqli_query()

?>