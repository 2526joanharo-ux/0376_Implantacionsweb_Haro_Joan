<?php

$valoridioma = $_POST["idioma"];

if ($valoridioma == "Catala") {
    setcookie("idioma","catala");
    echo "Quina moneda vols?";
    echo '
    <form action="botigafinal.php" method="post">
    <input type="submit" name= "moneda" value="Euro"> 
    <input type="submit" name= "moneda" value="Lliure">
    <input type="submit" name= "moneda" value="Dolar">
</form>
    ';
}
elseif ($valoridioma == "Castellano") {
    setcookie("idioma","castellano");
    echo "Que moneda quieres?";
    echo ' 
    <form action="botigafinal.php" method="post">
    <input type="submit" name= "moneda" value="Euro"> 
    <input type="submit" name= "moneda" value="Libra">
    <input type="submit" name= "moneda" value="Dolar">
</form>
    ';
}
elseif ($valoridioma == "English") {
    setcookie("idioma","ingles");
    echo "Which currency would you like to use?";
    echo '
    <form action="botigafinal.php" method="post">
    <input type="submit" name= "moneda" value="Euro"> 
    <input type="submit" name= "moneda" value="Pound">
    <input type="submit" name= "moneda" value="Dollar">
</form>
    ';
}
?>