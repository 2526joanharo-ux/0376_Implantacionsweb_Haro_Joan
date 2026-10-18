<?php
  $contador = $_COOKIE['contador'];
  $coche = 2000;
  $camion = 3;
  $comprahecha  = $_POST["comprar"];
  if ($contador >= 5 && $contador < 10){
        $coche = $coche * 0.80;
        $camion = $camion * 0.80;
     
    }
    elseif ($contador >= 10) {
        $coche = $coche * 0.50; 
        $camion = $camion * 0.50;
      
    }

  if ($comprahecha == "choche") {
  echo "Felicidades! Has comprado el choche por $coche ";
  }
  elseif ($comprahecha == "elcamionquemevaatropellar") {
    echo "Felicidades! Has comprado el camionquemeatropella por $camion ";
  }


    setcookie("contador",$contador = 0); 
?>