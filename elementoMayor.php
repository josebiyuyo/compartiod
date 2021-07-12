<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "<b>--Algoritmo que encuentra el valor mayor de un Array--</b></b><br>";

$mayor1=0;
$mayorT=0;
$cont=0;
$elements = array(0,44,1,67,127,9);

$long= count($elements);
$j=1;

 for($i=0; $i<$long; $i++){

    /*
    echo "elemento ";
    echo $i+1;
    echo " :$elements[$i]<br>"; */
     
    echo "<br>elemento:$j --> $elements[$i] <br>";

     if($elements[$i]>$elements[$i+1]){
        
         $mayor= $elements[$i];
       // echo "El elemento mayor es: $mayorT";
        } else{

           $mayor= $elements[$i+1];
         // echo "El elemento mayor es: $mayorT";
         }


     if ($mayor>$mayorT){
          $mayorT = $mayor;
         }     
        
     $j++;


  }//finFor
  echo "<br>";
  echo "<b>El elemento mayor es: [$mayorT]</b>";


/*
Forma fácil de realizarlo empleando funciones
$edades = array(23,11,10,12,1);
echo max(array(23,11,10,12,1));
*/

?>
</body>
</html>