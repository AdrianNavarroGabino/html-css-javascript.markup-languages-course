<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>

    <h2>Conversor de monedas</h2>

    <?php
        $amount = $_GET["amount"];
        $option = $_GET["option"];

        if($amount == null)
        {
            echo "<p>Debe introducir una cantidad</p>";
        }
        else
        {
            switch ($option) {
                case 'pesetas':
                    $result = $amount *  166.386;
                    break;
                case 'dolares':
                    $result = $amount * 1.325;
                    break;
                case 'libras':
                    $result = $amount * 0.927;
                    break;
                case 'yenes':
                    $result = $amount * 118.232;
                    break;
                case 'francos':
                    $result = $amount * 1.515;
                    break;
            }

            echo "<p>$amount euros equivalen a $result $option</p>";
        }

        echo "<p>[<a href=\"ej2.html\">Volver</a>]</p>";
    ?>
</body>
</html>