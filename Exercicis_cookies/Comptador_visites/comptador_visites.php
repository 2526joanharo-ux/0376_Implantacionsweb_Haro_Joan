<?php
$fechahora = "éste es el primer acceso";
$contador = 1;
date_default_timezone_set('Europe/Paris');
// si la variable está asignada quiere decir que existe la cookie
if (isset($_COOKIE['fechahora'])){
// fecha hora del último acceso
$fechahora = $_COOKIE['fechahora'];
$contador = $_COOKIE['contador'];
}
// actualización de la cookie: se debe hacer antes de
// mandar cualquier cabecera a la salida
setcookie("fechahora",date('d/m/Y h:i:s')); // actualiza la cookie
setcookie("contador",$contador + 1); // actualiza la cookie

echo "Veces que has visitado la pagina: ".$contador; 


?>
<html>
       <header>
        <meta charset="UTF-8">
        </header>
    <body>
    <p> COMPRA COMPRA COMPRE USTED UN PRODUCTO </p>
    <form action="logicacomprar.php" method="post">
     <select name="comprar" id="comprar">
  <option value="choche">Choche: 2000€</option>
  <option value="elcamionquemevaatropellar">Camion que me atropella: 3€</option> 
     <input type="submit" value="comprar"> <br>
</form>
<?php
    if ($contador >= 5 && $contador < 10){
        echo "Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga";
    }
    elseif ($contador >= 10) {
        echo "Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga";
    }

?>

    </body>

</html>

