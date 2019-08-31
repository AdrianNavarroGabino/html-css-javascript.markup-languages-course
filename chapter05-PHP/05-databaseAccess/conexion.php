<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        function conectarBD($servidor,$usuario,$contrasenya,$BD)
        {
            if(!(@$idCone=mysqli_connect($servidor,$usuario,$contrasenya,$BD)))
                die("Error de conexión ".mysqli_connect_errno()." Motivo: " .mysqli_connect_error());

            return $idCone;
        }

        function cambiarBD($conexion,$nombre)
        {
            mysqli_select_db($idCone, $nombre);
        }
    ?>
</body>
</html>