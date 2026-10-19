<?php
$moneda = $_POST["moneda"];
setcookie("moneda","null");
setcookie("idioma","null");
setcookie("majoredat","null");


if ($moneda == "Euro"){
    setcookie("moneda","euro");
}
elseif ($moneda == "Lliure" || "Libra" || "Pound"){
    setcookie("moneda","libra");
}
elseif ($moneda == "Dolar" || "Dollar"){
    setcookie("moneda","dolar");
}
?>
<?php
if ($_COOKIE['majoredat'] == "false"){
    echo "Bon intent, pero no podem servir alcohol a menors de 18";
}
if ($_COOKIE['majoredat'] == "true" && $_COOKIE['idioma'] == "catala" && $_COOKIE['moneda'] == "euro"){
    echo "Productes: Vi 3€\n";
    echo "Vi 2 (La Seqüela): 1€\n";
    echo "T'oferim el vi les terrases a un preu de 39€\n";
}
if ($_COOKIE['majoredat'] == "true" && $_COOKIE['idioma'] == "castellano" && $_COOKIE['moneda'] == "euro"){
    echo "Productos: Vino 3€\n";
    echo "Vino 2 (La Secuela): 1€\n";
  
}
if ($_COOKIE['majoredat'] == "true" && $_COOKIE['idioma'] == "ingles" && $_COOKIE['moneda'] == "euro"){
    echo "Products: Wine 3€\n";
    echo "Wine 2 (The sequel): 1€\n";
   
}
if ($_COOKIE['majoredat'] == "true" && $_COOKIE['idioma'] == "ingles" && $_COOKIE['moneda'] == "dolar"){
    echo "Products: Wine 3$\n";
    echo "Wine 2 (The sequel): 1$\n";
   
}
if ($_COOKIE['majoredat'] == "true" && $_COOKIE['idioma'] == "catala" && $_COOKIE['moneda'] == "dolar"){
    echo "Productes: Vi 3$\n";
    echo "Vi 2 (La Seqüela): 1$\n";
   
}
if ($_COOKIE['majoredat'] == "true" && $_COOKIE['idioma'] == "castellano" && $_COOKIE['moneda'] == "dolar"){
    echo "Productos: Vino 3$\n";
    echo "Vino 2 (La Secuela): 1$\n";
  
}
if ($_COOKIE['majoredat'] == "true" && $_COOKIE['idioma'] == "castellano" && $_COOKIE['moneda'] == "libra"){
    echo "Productos: Vino 3£\n";
    echo "Vino 2 (La Secuela): 1£\n";
  
}
if ($_COOKIE['majoredat'] == "true" && $_COOKIE['idioma'] == "catala" && $_COOKIE['moneda'] == "libra"){
    echo "Productes: Vi 3£\n";
    echo "Vi 2 (La Seqüela): 1£\n";
   
}
if ($_COOKIE['majoredat'] == "true" && $_COOKIE['idioma'] == "ingles" && $_COOKIE['moneda'] == "libra"){
    echo "Products: Wine 3£\n";
    echo "Wine 2 (The sequel): 1£\n";
   
}

?>