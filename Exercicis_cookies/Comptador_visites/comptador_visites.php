<?php
$fechahora = "éste es el primer acceso";
$contador = 1;
$coche = 2000;
$camion = 3;


if (isset($_COOKIE['fechahora'])){
// fecha hora del último acceso
$fechahora = $_COOKIE['fechahora'];
$contador = $_COOKIE['contador'];
}

setcookie("contador",$contador + 1); 

echo "Veces que has visitado la pagina: ".$contador; 


if ($contador >= 5 && $contador < 10){
        $coche = $coche * 0.80;
        $camion = $camion * 0.80;
        echo " Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga";
    }
    elseif ($contador >= 10) {
        $coche = $coche * 0.50; 
        $camion = $camion * 0.50;
        echo " Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga";
    }
?>

<html>
       <header>
        <meta charset="UTF-8">
        </header>
    <body>
    <ul>PRODUCTOS DISPONIBLES: </ul>
        <li>CHOCHE: <?php echo $coche; ?>€ </li>
        <li>CAMIONQUEMEATROPELLA: <?php echo $camion; ?>€ </li>
    </ul>
    <form action="logicacomprar.php" method="post">
     <select name="comprar" id="comprar">
     <option value="choche">Choche</option>
     <option value="elcamionquemevaatropellar">Camion que me atropella</option> 
     <input type="submit" value="comprar"> <br>
</form>


    </body>

</html>

