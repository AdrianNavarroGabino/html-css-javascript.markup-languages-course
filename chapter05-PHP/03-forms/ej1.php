<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
        $drink = $_GET["option"];
        $amount = $_GET["amount"];
        
        switch ($drink) {
            case 'cocacola':
                $drinkName = "Coca Cola";
                $price = $amount;
                break;
            case 'pepsi':
                $drinkName = "Pepsi Cola";
                $price = $amount * 0.8;
                break;
            case 'fanta':
                $drinkName = "Fanta Naranja";
                $price = $amount * 0.9;
                break;
            case 'trina':
                $drinkName = "Trina Manzana";
                $price = $amount * 1.2;
                break;
        }

        echo "<p>Has pedido $amount botellas de $drinkName que hacen $price €</p>";
    ?>
</body>
</html>