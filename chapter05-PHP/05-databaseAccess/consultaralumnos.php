<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONSULTA DE LOS ALUMNOS</title>
</head>
<body>
    <h1>CONSULTA DE LOS ALUMNOS</h1>
    <?php
        $sentencia = "SELECT * FROM alumnos;";

        include 'conexion.php';
        $idCone = conectarBD("localhost","adrian","1234","prueba");

        $recordset = mysqli_query($idCone, $sentencia);

        echo "<table><tr><th>Nombre</th><th>Dirección</th><th>E-mail</th><th>Teléfono</th>";

        while ($registro= mysqli_fetch_array($recordset))
        {
            echo "<tr>";
            echo "<td>" .$registro[0] ."</td>";
            echo "<td>" .$registro[1] ."</td>";
            echo "<td>" .$registro[2] ."</td>";
            echo "<td>" .$registro[3] ."</td>";
            echo "</tr>";
        }

        echo "</table><BR><BR>";

        echo "<p>En total hay " .mysqli_num_rows($recordset) ." alumnos</p>";

        mysqli_free_result($recordset);
        mysqli_close($idCone);

        echo '<p><a href="index.html">Volver al menú principal</a></p>';
    ?>
</body>
</html>