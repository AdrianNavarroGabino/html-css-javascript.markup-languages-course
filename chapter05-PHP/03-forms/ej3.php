<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>

    <h2>Conversor de monedas</h2>

    <?php
        if(!isset($_GET["send"]))
        {
            echo '<form action="ej3.php" submit="get">
            Cantidad en euros <input type="text" name="amount">
            Convertir a: 
            <select name="option">
                <option value="pesetas">Pesetas
                <option value="dolares">Dolares USA
                <option value="libras">Libras esterlinas
                <option value="yenes">Yenes japoneses
                <option value="francos">Francos suizos
            </select> </br>
            <input type="submit" value="Convertir" name="send">
        </form>';
        }
        else
        {
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

            echo "<p>[<a href=\"ej3.php\">Volver</a>]</p>";
        }
    ?>
</body>
</html>