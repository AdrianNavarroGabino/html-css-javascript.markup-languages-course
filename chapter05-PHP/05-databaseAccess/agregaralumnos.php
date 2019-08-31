<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $mail = $_POST["mail"];
        $telefono = $_POST["telefono"];

        $sentencia = "INSERT INTO alumnos
        (nombre,direccion,email,telefono)
        values
        ('$nombre','$direccion','$mail',$telefono);";

        include 'conexion.php';

        $idCone = conectarBD("localhost","adrian","1234","prueba");

        if($nombre != "" && mysqli_query($idCone, $sentencia))
            echo "El alumno con el nombre $nombre se ha insertado correctamente.";
        else if($nombre == "")
        {
            echo "Debe introducir un nombre";
        }
        else
            echo "Error insertando alumno: " .mysqli_error($idCone);
        
        mysqli_close($idCone);

        echo '<p><a href="index.html">Volver</a></p>';
    ?>
</body>
</html>