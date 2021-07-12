<?php 


$varcookie =  $_POST['user'];
//                             duración 1 hora
setcookie('ncookie','$varcookie',time()+36000);

session_start();
echo "<center>Bienvenido: ". $_SESSION['user'] . "</center>";
echo "<center>Locacion actual: " . $_SESSION['region'] ."</center><br>";

$inc = include("c.php");

echo "<center><h2>"."**Lista de usuarios registrados**"."</h2></center>";

if($inc){
    //                       tabla de la bd
  $consulta = "SELECT * FROM lista";
   $resultado = mysqli_query($conex,$consulta);
     if($resultado){
      while($row = $resultado->fetch_array()){
        $nombre2 = $row['name1'];
        $apellido2 = $row['apellido'];
        $edad2 = $row['edad'];
         $correo2 = $row['correo'];
        ?>

 <center>   

    <h2>
        <?php echo $nombre1; ?></h2>
    
      <div>
        <p>
         <td><b>Nombre:</b><?php echo $nombre2; ?></td><br>
         <td><b>Apellido:</b><?php echo $apellido2; ?></td><br>
         <td><b>edad:</b><?php echo $edad2; ?></td><br>
         <td><b>correo:</b><?php echo $correo2; ?></td><br>
       </p>

</div>

 </center>
<?php

   }
  }
 }


?>