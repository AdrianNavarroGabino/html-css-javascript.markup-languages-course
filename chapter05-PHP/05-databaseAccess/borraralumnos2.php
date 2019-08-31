<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BORRADO DE ALUMNOS</title>
</head>
<body>
    <h1>BORRADO DE ALUMNOS</h1>

    <?php
        $nombre = $_REQUEST["nombre"];

        $sentencia = "DELETE FROM alumnos WHERE nombre='$nombre';";

        include 'conexion.php';

        $idCone = conectarBD("localhost","adrian","1234","prueba");

        if(mysqli_query($idCone, $sentencia))
            echo "El alumno con el nombre $nombre se ha borrado correctamente.";
        else
            echo "Error borrando alumno: " .mysqli_error($idCone);
        
        mysqli_close($idCone);

        echo '<p><a href="index.html">Volver</a></p>';
    ?>
</body>
</html>