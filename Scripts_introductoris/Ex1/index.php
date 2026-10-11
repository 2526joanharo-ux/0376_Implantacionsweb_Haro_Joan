<html>
    <head>
        <body>
    <?php
    echo "Hola Mundo";
    ?>
    <form action="" method="post">
        Nom:<input type="text" name="nombre"> <br>
        Cognoms: <input type="text" name="cognoms"> <br>
        Email: <input type="text" name="email"> <br> 
        Missatge: <textarea name="missatge"> </textarea> <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST["nombre"])) {

    
     $nom = $_POST["nombre"];
     $email = $_POST["email"];
        echo "Missatge rebut ".$nom. ". Gràcies per contactar. Et respondrem aviat ".$email."";
        }
    ?>
        </body>

    </head>

</html>