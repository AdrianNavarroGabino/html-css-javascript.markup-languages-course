<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Adrián Navarro Gabino">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Manejo de cadenas</h1>
    <h2>Ejemplo 2</h2>
    <?php
        $texto = "uno-dos-tres-cuatro-cinco";
        $texto = explode("-", $texto);

        echo "<ul>";
        foreach($texto as $i)
        {
            echo "<li>" .$i ."</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>