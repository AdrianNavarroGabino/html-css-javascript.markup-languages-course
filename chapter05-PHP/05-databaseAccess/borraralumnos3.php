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
        $sentencia = "DELETE FROM alumnos;";

        include 'conexion.php';

        $idCone = conectarBD("localhost","adrian","1234","prueba");

        if(mysqli_query($idCone, $sentencia))
            echo "Se han borrado todos los alumnos";
        else
            echo "Error borrando alumnos: " .mysqli_error($idCone);
        
        mysqli_close($idCone);

        echo '<p><a href="index.html">Volver</a></p>';
    ?>
</body>
</html>