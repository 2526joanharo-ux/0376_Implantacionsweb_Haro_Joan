<?php
$moneda = $_POST["moneda"] ?? '';
$majoredat = $_COOKIE["majoredat"] ?? '';
$idioma = $_COOKIE["idioma"]?? '';


if ($moneda == "Euro"){
    setcookie("moneda","euro");
    $moneda = "euro";
}
elseif ($moneda == "Lliure" || $moneda == "Libra" || $moneda == "Pound"){
    setcookie("moneda","libra");
    $moneda = "libra";
}
elseif ($moneda == "Dolar" || $moneda == "Dollar"){
    setcookie("moneda","dolar");
    $moneda = "dolar";
}
?>
<?php
if ($majoredat == "false"){
    echo "Bon intent, pero no podem servir alcohol a menors de 18";
}
elseif ($majoredat == "true" && $idioma == "catala" && $moneda == "euro"){
    echo "Productes: Vi 3€\n";
    echo "Vi 2 (La Seqüela): 1€\n";
    echo "T'oferim el vi les terrases a un preu de 39€\n";
}
elseif ($majoredat == "true" && $idioma == "castellano" && $moneda == "euro"){
    echo "Productos: Vino 3€\n";
    echo "Vino 2 (La Secuela): 1€\n";
}
elseif ($majoredat == "true" && $idioma == "ingles" && $moneda == "euro"){
    echo "Products: Wine 3€\n";
    echo "Wine 2 (The sequel): 1€\n";
}
elseif ($majoredat == "true" && $idioma == "ingles" && $moneda == "dolar"){
    echo "Products: Wine 3$\n";
    echo "Wine 2 (The sequel): 1$\n";
}
elseif ($majoredat == "true" && $idioma == "catala" && $moneda == "dolar"){
    echo "Productes: Vi 3$\n";
    echo "Vi 2 (La Seqüela): 1$\n";
}
elseif ($majoredat == "true" && $idioma == "castellano" && $moneda == "dolar"){
    echo "Productos: Vino 3$\n";
    echo "Vino 2 (La Secuela): 1$\n";
}
elseif ($majoredat == "true" && $idioma == "castellano" && $moneda == "libra"){
    echo "Productos: Vino 3£\n";
    echo "Vino 2 (La Secuela): 1£\n";
}
elseif ($majoredat == "true" && $idioma == "catala" && $moneda == "libra"){
    echo "Productes: Vi 3£\n";
    echo "Vi 2 (La Seqüela): 1£\n";
}
elseif ($majoredat == "true" && $idioma == "ingles" && $moneda == "libra"){
    echo "Products: Wine 3£\n";
    echo "Wine 2 (The sequel): 1£\n";
}

?>