<?php
    $tipoiva = $_POST["cars"];
    $cuanto = $_POST["cantidad"];

    if ($tipoiva == "ivanormal") {
        $total = $cuanto * 1.21;
        
    }
    elseif ($tipoiva == "ivareducido") {
        $total = $cuanto * 1.10;
       
    }
    else {
        $total =  $cuanto * 1.04;
    }
    echo $total;

?>