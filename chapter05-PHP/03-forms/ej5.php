<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
    <style>
        .descripcion {
            width: 20%; 
            float: left;
            font-weight: bold;
        }

        form {
            border: dashed;
            border-color:aqua;
            margin: 2% 35% 2% 2%;
            padding: 2%;
        }

        h2 {
            color:royalblue;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 5</h1>

    <h2>Inserción de vivienda</h2>

    <?php
        if(!isset($_GET["enviar"]))
        {
            echo '<p>Introduzca los datos de la vivienda:</p>

            <form action="ej5.php" submit="get">
                <label for="tipo" class="descripcion">Tipo de vivienda:</label>
                <select name="tipo">
                    <option value="piso">Piso</option>
                    <option value="adosado">Adosado</option>
                    <option value="chalet">Chalet</option>
                    <option value="casa">Casa</option>
                </select> </br>
        
                <label for="zona" class="descripcion">Zona:</label>
                <select name="zona">
                    <option value="centro">Centro</option>
                    <option value="nervion">Nervión</option>
                    <option value="triana">Triana</option>
                    <option value="aljarafe">Aljarafe</option>
                    <option value="macarena">Macarena</option>
                </select> </br>
        
                <label for="direccion" class="descripcion">Dirección:</label>
                <input type="text" name="direccion"> </br>
        
                <label for="dormitorios" class="descripcion">Número de dormitorios:</label>
                <input type="radio" name="dormitorios" id="1" value="1">
                <label for="1">1</label>
                <input type="radio" name="dormitorios" id="2" value="2">
                <label for="2">2</label>
                <input type="radio" name="dormitorios" id="3" value="3">
                <label for="3">3</label>
                <input type="radio" name="dormitorios" id="4" value="4">
                <label for="4">4</label>
                <input type="radio" name="dormitorios" id="5" value="5">
                <label for="5">5</label> </br>
        
                <label for="precio" class="descripcion">Precio:</label>
                <input type="text" name="precio"> € </br>
        
                <label for="metros" class="descripcion">Tamaño:</label>
                <input type="text" name="metros"> metros cuadrados </br>
        
                <label for="extras" class="descripcion">Extras (marque los que procedan):</label>
                <input type="checkbox" name="extras" id="piscina" value="piscina">
                <label for="piscina">Piscina</label>
                <input type="checkbox" name="extras" id="jardin" value="jardin">
                <label for="jardin">Jardín</label>
                <input type="checkbox" name="extras" id="garaje" value="garaje">
                <label for="garaje">Garaje</label> </br></br>
        
                <label for="observaciones" class="descripcion">Observaciones:</label>
                <textarea name="observaciones" cols="20" rows="4"></textarea> </br>
        
                <input type="submit" value="Insertar vivienda" name="enviar">
            </form>';
        }
        else
        {
            if($_GET["direccion"] == null || $_GET["dormitorios"] == null || (int)$_GET["precio"] <= 0 || (int)$_GET["metros"] <= 0)
            {
                echo '<p>Introduzca los datos de la vivienda:</p>

                <form action="ej5.php" submit="get">
                    <label for="tipo" class="descripcion">Tipo de vivienda:</label>
                    <select name="tipo">
                        <option value="piso">Piso</option>
                        <option value="adosado">Adosado</option>
                        <option value="chalet">Chalet</option>
                        <option value="casa">Casa</option>
                    </select> </br>
            
                    <label for="zona" class="descripcion">Zona:</label>
                    <select name="zona">
                        <option value="centro">Centro</option>
                        <option value="nervion">Nervión</option>
                        <option value="triana">Triana</option>
                        <option value="aljarafe">Aljarafe</option>
                        <option value="macarena">Macarena</option>
                    </select> </br>
            
                    <label for="direccion" class="descripcion">Dirección:</label>
                    <input type="text" name="direccion"> </br>';

                    if($_GET["direccion"] == null)
                    {
                        echo "<p class=\"error\">¡Se requiere la dirección de la vivienda!</p>";
                    }
            
                    echo '<label for="dormitorios" class="descripcion">Número de dormitorios:</label>
                    <input type="radio" name="dormitorios" id="1" value="1">
                    <label for="1">1</label>
                    <input type="radio" name="dormitorios" id="2" value="2">
                    <label for="2">2</label>
                    <input type="radio" name="dormitorios" id="3" value="3">
                    <label for="3">3</label>
                    <input type="radio" name="dormitorios" id="4" value="4">
                    <label for="4">4</label>
                    <input type="radio" name="dormitorios" id="5" value="5">
                    <label for="5">5</label> </br>';

                    if($_GET["dormitorios"] == null)
                    {
                        echo "<p class=\"error\">Debe introducir el número de dormitorios</p>";
                    }
            
                    echo '<label for="precio" class="descripcion">Precio:</label>
                    <input type="text" name="precio"> € </br>';

                    if((int)$_GET["precio"] <= 0)
                    {
                        echo "<p class=\"error\">El precio debe ser un valor numérico</p>";
                    }
            
                    echo '<label for="metros" class="descripcion">Tamaño:</label>
                    <input type="text" name="metros"> metros cuadrados </br>';

                    if((int)$_GET["metros"] <= 0)
                    {
                        echo "<p class=\"error\">El tamaño debe ser un valor numérico</p>";
                    }
            
                    echo '<label for="extras" class="descripcion">Extras (marque los que procedan):</label>
                    <input type="checkbox" name="extras" id="piscina" value="piscina">
                    <label for="piscina">Piscina</label>
                    <input type="checkbox" name="extras" id="jardin" value="jardin">
                    <label for="jardin">Jardín</label>
                    <input type="checkbox" name="extras" id="garaje" value="garaje">
                    <label for="garaje">Garaje</label> </br></br>
            
                    <label for="observaciones" class="descripcion">Observaciones:</label>
                    <textarea name="observaciones" cols="20" rows="4"></textarea> </br>
            
                    <input type="submit" name="enviar" value="Insertar vivienda">
                </form>';
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
                echo "<li>Foto: " .$_GET["foto"] ."</li>";
                echo "<li>Observaciones: " .$_GET["observaciones"] ."</li></ul>";
                
                $mensaje = "Insertar otra vivienda";
                echo "<p>[<a href=\"ej5.php\">$mensaje</a>]</p>";
            }
        }
    ?>

    
</body>
</html>