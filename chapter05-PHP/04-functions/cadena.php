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
    <?php
        function calcula_extension($nombre)
        {
            return strtoupper(substr($nombre, strpos($nombre, ".") + 1));
        }

        function tipo_fichero (&$extension)
        {
            switch($extension)
            {
                case "PDF": $extension = "Documento Adobe PDF"; break;
                case "TXT": $extension = "Documento de texto"; break;
                case "HTM":
                case "HTML": $extension = "Documento HTML"; break;
                case "PPT": $extension = "Presentación Microsoft Powerpoint"; break;
                case "DOC": $extension = "Documento Microsoft Word"; break;
                case "GIF": $extension = "Imagen GIF"; break;
                case "JPG": $extension = "Imagen JPG"; break;
                case "ZIP": $extension = "Archivo comprimido ZIP"; break;
                default: $extension = "Archivo $extension"; break;
            }
        }
    ?>
</body>
</html>