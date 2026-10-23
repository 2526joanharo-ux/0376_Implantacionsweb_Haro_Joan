 <?php
$servidor= "localhost";
$usuario= "root";
$password= "";
$basedatos= "base1";

$conn= mysqli_connect($servidor, $usuario, $password, $basedatos)
    or die("Problemas con la conexión");

$registros = mysqli_query($conn, "select nombre, email, codigocurso from alumnos")
    or die("Problemas en el select: " . mysqli_error($conn));

while ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre: " . $reg['nombre'] . "<br>";
    echo "Email: " . $reg['email'] . "<br>";
    echo "Código del curso: " . $reg['codigocurso'] . "<br>";
    echo "<hr>";
}

mysqli_close($conn);
?>

<a href="prueba.php"><button>Volver</button></a>