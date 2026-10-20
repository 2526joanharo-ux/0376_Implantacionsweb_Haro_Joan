<?php
    session_start();
    $usuari= $_POST["usuari"];
    $contrasenya = $_POST["contrasenya"];



    if ($usuari == "anna" && $contrasenya == "anna") {
        $_SESSION["usuari"] = $usuari;
        header("Location: pagina.php");
        exit();
    }
    else {
        header("Location: index.html");
        exit();
    } 

?>