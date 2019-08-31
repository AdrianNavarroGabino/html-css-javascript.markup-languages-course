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
    include 'conexion.php';
    $idCone = conectarBD("localhost","adrian","1234","prueba");

    $nombreBorrar = $_POST["nombreBorrar"];

    $sentencia = "SELECT * FROM alumnos WHERE nombre = '$nombreBorrar';";

    $recordset = mysqli_query($idCone, $sentencia);

    if(mysqli_num_rows($recordset) == 1)
    {
        $registro= mysqli_fetch_array($recordset);
        $nombre = $registro[0];
        
        echo "<p>Nombre: " .$registro[0] ."</p>";
        echo "<p>Dirección: " .$registro[1] ."</p>";
        echo "<p>Email: " .$registro[2] ."</p>";
        echo "<p>Teléfono: " .$registro[3] ."</p>";
        echo "<BR>";
        $confirmarBorrado = false;
        echo '<button onclick="eliminar(\'' .$nombre .'\')">Eliminar alumno</button>';
    }
    else
    {
        if($nombreBorrar == "")
        {
            echo '<script>if(confirm("¿Está seguro que desea eliminar " +' .mysqli_num_rows(mysqli_query($idCone, "SELECT * FROM alumnos;")) .' + " filas?"))
            {
                location.assign("borraralumnos3.php");
            }</script>';
        }
        else
        {
            echo "<p>Alumno no encontrado</p>";
        }
    }
    
    mysqli_free_result($recordset);
    mysqli_close($idCone);

    echo '<p><a href="index.html">Volver al menú principal</a></p>';
    ?>

    <script>
        function eliminar(a)
        {
            let eliminarAlumno = confirm("¿Está seguro que desea eliminar el alumno?");
            if(eliminarAlumno)
            {
                location.assign("borraralumnos2.php?nombre=" + a);
            }
        }
    </script>
</body>
</html>