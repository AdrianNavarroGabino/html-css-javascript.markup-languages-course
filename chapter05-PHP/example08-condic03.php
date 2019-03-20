<html>
<body>
    <?php
        // condic03.php - Condiciones con "if" y "else", 1
        $nombre = "Juan";
        $num = 3.5;
        if (($nombre != "Juan") or (!($num > 4.0))) {
            echo "El nombre no es Juan o el numero es menor o igual que 4";
        }
        else {
            echo "Se llama Juan y el numero es mayor que 4";
        }
    ?>
</body>
</html>