<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

<center>
     <font color="blue" ><h2>Calculadora</h2></font>
    <form method="POST" action="calculadora.php">
    <b>1er valor:</b><input type="number" name="a"><br><br>
    <b>2do valor:</b><input type="number" name="b"><br><br>

    <p>operacion a realizar: 
     <select name="opc"> 
      <option value="s">Suma</option>
      <option value="r">Resta</option>
      <option value="m">Multiplicación</option>
      <option value="d">División</option>
     </select>
    </p>
    <input type="submit" value="enviar">

</form>
</center>
<?php 


$num1= $_POST['a'];
$num2= $_POST['b'];
$op= $_POST['opc'];

 $opc=1;

        switch ($op){

            case 's': 
                       $result= $num1 + $num2;
                       echo "<center><p>El resultado es: $result</p></center>";
                  break;
            case 'r':
                       $result= $num1 - $num2;
                       echo "<center><p>El resultado es:$result</p></center>";

                   break;
            case 'm':

                       $result= $num1 * $num2;
                       echo "<center><p>El resultado es:$result</p></center>";

                  break;
            case 'd':
                        
                      if ($num2<$num1){
                         echo "<center><font color='rojo'>Error, el dividendo debe ser mayor al divisor</font></center>";
                           }
                        $result= $num1/$num2;
                        echo "<center><p>El resultado es:$result</p></center>";
                    
                  break;

            default; 
            echo "No se encontraron valores";  
         }//fin switch

         //sleep(10);
         location('calculadora.php');
 
?>
</body>
</html>