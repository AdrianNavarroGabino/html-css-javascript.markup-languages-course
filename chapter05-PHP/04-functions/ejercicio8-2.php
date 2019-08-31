<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Adrián Navarro Gabino">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8.2</title>
</head>
<body>
    <h1>Ejercicio 8.2</h1>

    <?php
        function hacer_tabla($filas, $columnas)
        {
            echo "<table style='border: 1px solid black'>";

            for($i = 0; $i < $filas; $i++)
            {
                echo "<tr style='border: 1px solid black'>";
                for($j = 0; $j < $columnas; $j++)
                {
                    echo "<td style='border: 1px solid black'>" .$i * $j ."</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        }

        hacer_tabla(4,7);
    ?>
</body>
</html>