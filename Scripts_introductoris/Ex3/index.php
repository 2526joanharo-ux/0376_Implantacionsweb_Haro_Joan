<html>
    <head>
        <meta charset="UTF-8">
        <body>
        <?php 
        $lahora = (int) date("G");

        if ($lahora >= 5 && $lahora < 14) {
            $mensaje = "Bon dia";
        }
        elseif ($lahora >= 14 && $lahora <19 ) {
            $mensaje = "Bona tarda";
        }
        else {
            $mensaje = "bona nit";
        }
        echo $mensaje 
        ?>

    
        </body>

    </head>

</html>
