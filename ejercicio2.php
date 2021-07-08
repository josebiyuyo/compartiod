<!--
    Escribe un programa que pinte por pantalla 
    una pirámide rellena a base de asteriscos. 
    La base de lapirámide debe estar formada 
    por 9 asteriscos.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piramine</title>
</head>
<body>
    <?php
       // echo "<div align='center'>Por favor, completa todos los campos.</div><br>"; 
        
       echo "<div align='center'><h1>Piramide</h1></div><br>";
       echo "a"."b";
       $ast = "";

       for ($i = 0; $i<=8; $i++){
            $a = $a."*";
            echo "<div align='center'>$a</div>";
       }    
    ?>
</body>
</html>