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

echo "<b>--Algoritmo que ordena los elementos de un array--</b></b><br>";
 $edades= array("a"=>"16","b"=>"56","c"=>"20","d"=>"11");

  asort($edades);
     echo "<br><u>Ordenamiento:</u><br>";
   foreach ($edades as $r){
    echo "($r)";
   }

 $valores= array("a"=>"16","b"=>"56","c"=>"20","d"=>"11");

     //ordena de forma inversa
     arsort($valores);
     echo "<br><br><br><u>Ordenamiento Inverso</u><br>";
     foreach ($valores as $ls => $n){
     echo "($n)";
     }  

     ksort($valores);
     echo "<br>"; 
     echo "<br><br><br><u>ordamiento de keys</u><br>";
     foreach ($valores as $ls => $n){
     echo "-$ls";
     }  

    echo "<br>";
    $datos= array(3,34,76,3,10,3,12,76);
    echo "Elementos del array: ";
        foreach ($datos as $r){
         echo "$r,";
        }

    echo "<br><b>-Muestra la cantidad de elementos repetidos-</b><br>";
        $d = array_count_values($datos);
         foreach ($d as $result){
          echo "[$result]-";
      }


     


 ?>
</body>
</html>