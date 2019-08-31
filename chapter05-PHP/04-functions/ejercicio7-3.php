<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Adrián Navarro Gabino">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7.3</title>
</head>
<body>
    <h1>Ejercicio 7.3</h1>
    <?php
        $frases = array("Frase prefijada #1",
                        "Frase prefijada #2",
                        "Frase prefijada #3",
                        "Frase prefijada #4",
                        "Frase prefijada #5",
                        "Frase prefijada #6",
                        "Frase prefijada #7");
        
        echo "<p>" .$frases[rand() % count($frases)] ."</p>";
    ?>
</body>
</html>