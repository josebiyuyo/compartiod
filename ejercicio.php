<!--Escribe un programa que muestre tu horario 
de clase mediante una tabla. Aunque se puede 
haceríntegramente en HTML (igual que los ejercicios 
anteriores), ve intercalando código HTML y 
PHPpara familiarizarte con éste último.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
</head>
<body>
    <table border="1">
    <h3 text-aling="center">Horario de Clases</h3>
        <?php
            
            $dias = array("lunes", "marte", "miercoles", "jueves", "viernes", "sabado", "domingo");
            
            $horas = array("7:00 a 8:30", "8:30 a 10:30", "10:30 a 12:00", "12:00 a 01:30", "01:30 a 04:00");

            $materias = array("Matematica","fisica","biologia","castellano","educacion fisica","bloque libre");
            //echo $dias[array_rand($dias)];

            echo "<tr>";
            echo "<td>Horario</td>";

            for ($i=0; $i<=6; $i++){
                echo "<td>".$dias[$i]."</td>";
            }

            echo "</tr>";

            for ($k=0; $k<=4; $k++){
                echo "<tr>";
                echo "<td>".$horas[$k]."</td>";
                
               for ($j=0; $j<=6; $j++){
                    if ($j == 5 or $j == 6){
                        echo "<td>descanso</td>";
                    }else{
                        echo "<td>".$materias[array_rand($materias)]."</td>";  
                    }
                }

                echo "</tr>";
            } 

        ?>
    </table>
</body>
</html>