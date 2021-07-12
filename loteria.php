<?php


class loteria{

public $numero;
public $intentos;
public $resultado = false;

  public function __construct($numero,$intentos){

   $this->numero = $numero;
   $this->intentos = $intentos;
  }

  public function solteo(){

    $min = $this->numero / 2;
    $max = $this->numero * 2;

       for($i=0; $i<$this->intentos; $i++){
           $int = rand($min, $max);
           self::intentos($int);
         }
   }

   public function intentos($int){
        if ($int == $this->numero){
            echo "<br>" . $int ." =". $this->numero ."<br><br>" ;
            $this->resultado=true;
        } else{
             echo $int ."!=". $this->numero ."<br>";
           }
    }

    public function __destruct(){
        if($this->resultado){
            echo "<b>¡Felicidades, has ganado en: ". $this->intentos ." intentos!<b>";
        } else {
             echo "<b>¡Lo siento, has perdido en ". $this->intentos . " intentos!<b>";

          }
    }

} //fin class loteria-

$mostrar = new loteria(10,5);
$mostrar->solteo();

?>