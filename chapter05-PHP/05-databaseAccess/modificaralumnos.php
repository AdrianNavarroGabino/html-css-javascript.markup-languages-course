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
        $sentencia = "SELECT * FROM alumnos WHERE nombre = '" .$_POST["nombreModificar"] ."';";

        $nombreAntiguo = $_POST["nombreModificar"];

        include 'conexion.php';
        $idCone = conectarBD("localhost","adrian","1234","prueba");

        $recordset = mysqli_query($idCone, $sentencia);

        if(mysqli_num_rows($recordset) == 1)
        {
            $registro= mysqli_fetch_array($recordset);

            echo '<form action="modificaralumnos2.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="' .$registro[0] .'"><BR>
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" value="' .$registro[1] .'"><BR>
                <label for="mail">Mail:</label>
                <input type="text" name="mail" id="mail" value="' .$registro[2] .'"><BR>
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" value="' .$registro[3] .'"><BR>
                <input type="hidden" name="nombreMod" value="' .$nombreAntiguo .'">
                <input type="submit" name="enviarForm" value="Modificar"><BR>
            </form>';
            echo '<p><a href="index.html">Cancelar la modificación y volver al menú principal</a></p>';
        }
        else
        {
            echo "<p>Usuario no encontrado.</p>";
            echo '<p><a href="index.html">Volver</a></p>';
        }

        mysqli_free_result($recordset);
        mysqli_close($idCone);
    ?>
</body>
</html>