<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MODIFICAR ALUMNOS</title>
</head>
<body>
    <h1>MODIFICAR ALUMNOS</h1>

    <?php
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $mail = $_POST["mail"];
        $telefono = $_POST["telefono"];
        $nombreMod = $_POST["nombreMod"];

        $sentencia = "UPDATE alumnos
        set nombre='$nombre', direccion='$direccion', email='$mail', telefono='$telefono'
        where nombre='$nombreMod';";

        include 'conexion.php';

        $idCone = conectarBD("localhost","adrian","1234","prueba");

        if($nombre != "" && mysqli_query($idCone, $sentencia))
            echo "El alumno con el nombre $nombreMod se ha modificado correctamente.";
        else if($nombre == "")
            echo "El nombre no puede estar vacío";
        else
            echo "Error modificando alumno: " .mysqli_error($idCone);
        
        mysqli_close($idCone);

        echo '<p><a href="index.html">Volver</a></p>';
    ?>
</body>
</html>