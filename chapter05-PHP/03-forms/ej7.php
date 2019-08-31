<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Ejercicio 7</h1>

    
    
    <?php
        if(!isset($_GET["enviar"]))
        {
            $cantidad = $_GET["controles"];

            echo '<form action="ej7.php" method="get">
                <table style="border: 1px solid black;">';
                        for($i = 0; $i < $_GET["controles"]; $i++)
                        {
                            echo "<tr style=\"border: 1px solid black;\">";
                            echo "<td style=\"border: 1px solid black;\">Texto:</td>";
                            echo "<td style=\"border: 1px solid black;\"><input type=\"text\" name=\"pais" .$i ."\"></td>";
                            echo "<td style=\"border: 1px solid black;\"><input type=\"text\" name=\"continente" .$i ."\"></td>";
                            echo "</tr>";
                        }
                        echo "</br>";
                echo "</table>";

                echo '<input type="submit" value="Enviar" name="enviar">
                <input type="reset" value="Borrar">
            </form>';
        }
        
        else
        {
            $i = 0;
            $error = false;

            while(isset($_GET["pais" .$i]))
            {
                if($_GET["pais" .$i] == "" || $_GET["continente" .$i] == "")
                {
                    $error = true;
                }
                $i++;
            }
            if($error)
            {
                echo '<p>No has rellenado todos los campos</p>';
            }
            else
            {
                echo '<form action="ej7.php" method="get">
                    <select name="paises" id="paises">';
                        
                            $i = 0;
                            while(isset($_GET["pais" .$i]))
                            {
                                echo '<option value="pais' .$i .'">' .$_GET["pais" .$i] .'</option>';
                                $i += 1;
                            }
                    echo '</select>';

                    echo '<input type="text" name="continentes" id="continentes" value="">
                </form>';
            }

            echo '<p><a href="ej7.html">Volver a empezar</a></p>';
        }
        ?>
</body>
</html>