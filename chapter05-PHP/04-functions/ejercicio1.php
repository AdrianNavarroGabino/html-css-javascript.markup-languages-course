<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Adrián Navarro Gabino">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
    <?PHP
        include 'cadena.php';
        $fichero = "curriculum.pdf";
        $tipo = calcula_extension ($fichero);
        tipo_fichero ($tipo);
        print ("El fichero '$fichero' es de tipo '$tipo'.\n");
    ?> 
</body>
</html>