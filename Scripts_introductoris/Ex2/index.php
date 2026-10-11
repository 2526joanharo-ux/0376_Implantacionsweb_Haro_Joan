<?php 
    $monedaescogida = $_POST["cars"];
    $cantidad = $_POST["cantidad"];

    if ($monedaescogida == "dolar") {
        $dinero = $cantidad * 0.84;
        echo "La conversion da $dinero €";
    }
    else {
        $dinero = $cantidad * 1.14;
        echo "La conversion da $dinero $";
    }
?>

