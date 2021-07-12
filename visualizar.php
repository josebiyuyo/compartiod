<?php

include("conection.php");
$usuarios = ("SELECT FROM * lista");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores de la base de datos</title>
</head>
<body>

<div class="container-table">
<div class="table-title"><u>Usuarios registrados</u></div>
<div class="table-header">Nombre</div>
<div class="table-header">Apellido</div>
<div class="table-header">Edad</div>
<div class="table-header">Correo</div>

<!-- permite la ejecucion de la consulta 
variable de la consulta: $usuario   -->
<?php $resultado=mysqli_query($conexion, $usuarios); 

//$row permite traer todos los resultados de la consulta           
while($row=mysqli_fetch_assoc($resultado)){ ?>
<div class="table-item"><?php echo $row["nombre"]; ?></div>
<div class="table-item"><?php echo $row["apellido"]; ?></div>
<div class="table-item"><?php echo $row["edad"];?></div>
<div class="table-item"><?php echo $row["email"];?></div>

<!--cierre del while -->
<?php  } ?>
</div>
</body>
</html>