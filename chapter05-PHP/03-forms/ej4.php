<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
    <style>
        h2 {
            color:royalblue;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 4</h1>

    <h2>Inserción de vivienda</h2>

    <?php
        if($_GET["direccion"] == null || $_GET["dormitorios"] == null || (int)$_GET["precio"] <= 0 || (int)$_GET["metros"] <= 0)
        {
            echo "<p>No se ha podido realizar la inserción debido a los siguientes errores:</p>";

            echo "<ul>";

            if($_GET["direccion"] == null)
            {
                echo "<li>Se requiere la dirección de la vivienda</li>";
            }
            if($_GET["dormitorios"] == null)
            {
                echo "<li>Debe introducir el número de dormitorios</li>";
            }
            if((int)$_GET["precio"] <= 0)
            {
                echo "<li>El precio debe ser un valor numérico</li>";
            }
            if((int)$_GET["metros"] <= 0)
            {
                echo "<li>El tamaño debe ser un valor numérico</li>";
            }

            echo "</ul>";

            $mensaje = "Volver";
        }
        else
        {
            echo "<p>Estos son los datos introducidos:</p>";

            echo "<ul><li>Tipo: " .$_GET["tipo"] ."</li>";
            echo "<li>Zona: " .$_GET["zona"] ."</li>";
            echo "<li>Dirección: " .$_GET["direccion"] ."</li>";
            echo "<li>Número de dormitorios: " .$_GET["dormitorios"] ."</li>";
            echo "<li>Precio: " .$_GET["precio"] ."</li>";
            echo "<li>Tamaño: " .$_GET["metros"] ."</li>";
            echo "<li>Extras: " .$_GET["extras"] ."</li>";
            echo "<li>Observaciones: " .$_GET["observaciones"] ."</li></ul>";
            
            $mensaje = "Insertar otra vivienda";
        }
        echo "<p>[<a href=\"ej4.html\">$mensaje</a>]</p>";
    ?>

    
</body>
</html>