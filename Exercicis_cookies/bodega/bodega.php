<?php
setcookie("moneda","");
setcookie("idioma","");
setcookie("majoredat","");
?>
<html>
       <header>
        <meta charset="UTF-8">
        </header>
    <body>
    
    <p> Ets major d'edat? </p> 
    <form action="majoredat.php" method="post">
    <input type="submit" value="Si"> 
</form>
    <form action="menoredat.php" method="post">
    <input type="submit" value="No">
</form>

    </body>

</html>
