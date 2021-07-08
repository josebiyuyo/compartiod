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
       $ast = "";
       $astb = "";

       for ($i = 1; $i<=9; $i++){
            if ($i == 1){
                $ast = $ast."*";
                echo "<div align='center'>".$ast."</div>";
            }

            elseif($i > 1 & $i < 8){
                $ast = $ast."&nbsp"."&nbsp"."&nbsp";
                echo "<div align='center'>".$ast."*</div>";
            }

            else{
                if ($i == 8){
                  //  echo strlen($ast);
                    for($k = 1; $k <= 9; $k++){
                    $astb = $astb."  *  ";
                }
                    echo "<div align='center'>".$astb."</div>";
                }
                
            }

       }    
    ?>
</body>
</html>