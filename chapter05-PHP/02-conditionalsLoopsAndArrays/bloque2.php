<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Adrián Navarro Gabino">
    <title>Actividades BLOQUE II. Condicionales, bucles y arrays</title>
</head>
<body>
    <h1>Actividades BLOQUE II. Condicionales, bucles y arrays</h1>

    <h2>Ejercicio 1</h2>

    <?php
        $hour = date("H:i:s");
        $monthDay = date("j");
        $monthName = ["Enero", "Febrero", "Marzo",
                      "Abril", "Mayo", "Junio",
                      "Julio", "Agosto", "Septiembre",
                      "Octubre", "Noviembre", "Diciembre"];
        // date("F") saca el nombre del mes en inglés
        $monthNumber = date("n");
        $year = date("Y");
        $numberOfDays = date("t");

        echo "<p>Cuando se cargó esta página eran las $hour del día $monthDay de $monthName[$monthNumber] del año $year</p>";

        echo "<p>Este mes de $monthName[$monthNumber] tiene $numberOfDays días</p>";
    ?>

    <h2>Ejercicio 2</h2>

    <?php
        $number = 5;
        $option = "table";

        switch($option) {
            case "ul":
                echo "<ul>";
                for($i = 1; $i <= $number; $i++)
                {
                    echo "<li>Elemento " .$i ."</li>";
                }
                echo "</ul>";
                break;
            case "ol":
                $i = 1;
                echo "<ol>";
                do
                {
                    echo "<li>Elemento " .$i ."</li>";
                    $i++;
                } while($i <= $number);
                echo "</ol>";
                break;
            case "table":
                echo "<table style=\"border: 1px solid black\">";
                for($i = 1; $i <= $number; $i++)
                {
                    echo "<tr><td>Elemento " .$i ."</td></tr>";
                }
                echo "</table>";
                break;
            case "select":
                $i = 1;
                echo "<select>";
                while($i <= $number)
                {
                    echo "<option value=\"elem" .$i ."\">Elemento " .$i ."</option>";
                    $i++;
                }
                echo "</select>";
                break;
        }
    ?>

    <h2>Ejercicio 3</h2>

    <?php
        $correo1 = "correo@gmail.com";
        $correo2 = "correo.gmail.com";
        $correo3 = "correo@gmailcom";

        if(strstr($correo1,"@") and strstr($correo1,"."))
            echo "<p>$correo1 es un correo válido</p>";
        else
            echo "<p>$correo1 NO es un correo válido</p>";

        if(strstr($correo2,"@") and strstr($correo2,"."))
            echo "<p>$correo2 es un correo válido</p>";
        else
            echo "<p>$correo2 NO es un correo válido</p>";
        
        if(strstr($correo3,"@") and strstr($correo3,"."))
            echo "<p>$correo3 es un correo válido</p>";
        else
            echo "<p>$correo3 NO es un correo válido</p>";
    ?>

    <h2>Ejercicio 4</h2>

    <?php
        $num1 = 4;
        $num2 = -5;

        $mayor = $num1 > $num2 ? $num1 : $num2;
        $menor = $num1 < $num2 ? $num1 : $num2;

        echo "<p>El mayor entre $num1 y $num2 es: $mayor</p>";

        echo "<p>Numeros entre $menor y $mayor: ";
        for($i = $menor; $i <= $mayor; $i++)
        {
            echo "$i ";
        }
        echo "</p>";

        $count = 0;
        for($i = $menor; $i <= $mayor; $i++)
        {
            if($i % 2 == 0)
                $count++;
        }
        echo "<p>Cantidad de números pares entre $menor y $mayor: $count</p>";

        $count = 0;
        for($i = $menor; $i <= $mayor; $i++)
        {
            if($i % 2 == 1)
                $count++;
        }
        echo "<p>Cantidad de números impares entre $menor y $mayor: $count</p>";

        $count = 0;
        for($i = $menor; $i <= $mayor; $i++)
        {
            if($i > 0)
                $count++;
        }
        echo "<p>Cantidad de números positivos entre $menor y $mayor: $count</p>";

        $count = 0;
        for($i = $menor; $i <= $mayor; $i++)
        {
            if($i < 0)
                $count++;
        }
        echo "<p>Cantidad de números positivos entre $menor y $mayor: $count</p>";

        $sum = 0;
        for($i = $menor; $i <= $mayor; $i++)
        {
            $sum += $i;
        }
        echo "<p>Suma total de todos los números entre $menor y $mayor: $sum</p>";
    ?>

    <h2>Ejercicio 5</h2>

    <?php
        $data = array(1, 4, 1, 5, 2, 3, 4);

        $greatest = $data[0];

        for($i = 1; $i < count($data); $i++)
            $greatest = $data[$i] > $greatest ? $data[$i] : $greatest;
        
        echo "<p>El mayor número del array es: $greatest</p>";
    ?>

    <h2>Ejercicio 6</h2>

    <?php
        $data = array();

        for($i = 0; $i < 10; $i++)
            $data[] = rand(1,10);
            
        $count = 0;

        for($i = 0; $i < count($data); $i++)
            if($data[$i] == 2)
                $count++;
        
        echo "<p>Cantidad de 2: $count</p>";
    ?>

    <h2>Ejercicio 7</h2>

    <?php
        $weekDays = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
        
        echo "<p>";
        foreach($weekDays as $day)
            echo "$day<br/>";
        echo "</p>";
    ?>

    <h2>Ejercicio 8</h2>

    <?php
        $countries1 = array("Argentina", "Uruguay", "Brasil", "Chile");
        $countries2 = ["Argentina", "Uruguay", "Brasil", "Chile"];
        $countries3[] = "Argentina";
        $countries3[] = "Uruguay";
        $countries3[] = "Brasil";
        $countries3[] = "Chile";

        echo "<p>";
        foreach($countries1 as $c)
            echo "$c</br>";
        echo "</p>";

        echo "<p>";
        foreach($countries2 as $c)
            echo "$c</br>";
        echo "</p>";

        echo "<p>";
        foreach($countries3 as $c)
            echo "$c</br>";
        echo "</p>";
    ?>

    <h2>Ejercicio 9</h2>

    <?php
        $data = array(1, 4, 1, 5, 2, 3, 4);

        echo "<p>Elementos del vector: " .count($data) ."</p>";
    ?>

    <h2>Ejercicio 10</h2>

    <h3>Ejercicio 6.1</h3>

    <?php
        $data = array(3,5,7,1,10,3,4,7,7,9);

        $sum = 0;

        foreach($data as $d)
            $sum += $d;
        
        $average = $sum / count($data);

        echo "<p>Media: $average</p>";

        echo "<p>";
        foreach($data as $d)
            if($d > $average)
                echo "$d ";
        echo "</p>";
    ?>
    
    <h3>Ejercicio 6.2</h3>

    <?php
        $monthNumber = 5;
        $dayNumber = 6;

        $months = array("Enero", "Febrero", "Marzo", "Abril",
                        "Mayo", "Junio", "Julio", "Agosto",
                        "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $weekDays = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

        echo "<p>" .$weekDays[$dayNumber - 1] .", " .$months[$monthNumber - 1] ."</p>";
    ?>

    <h3>Ejercicio 6.3</h3>

    <?php
        $dictionary = array("uno" => "one",
                            "dos" => "two",
                            "tres" => "three",
                            "cuatro" => "four",
                            "cinco" => "five",
                            "seis" => "six",
                            "siete" => "seven",
                            "ocho" => "eight",
                            "nueve" => "nine",
                            "diez" => "ten");
        
        $text1 = "uno";
        $text2 = "hola";

        echo "<p>";
        if(!isset($dictionary[$text1]))
            echo "Word not found";
        else
            echo "$text1 = $dictionary[$text1]";
        echo "</p>";

        echo "<p>";
        if(!isset($dictionary[$text2]))
            echo "Word not found";
        else
            echo "$text2 = $dictionary[$text2]";
        echo "</p>";
    ?>

    <h3>Ejercicio 6.4</h3>

    <?php
        echo "<p>IP: " .$_SERVER['REMOTE_ADDR'] ."</p>";

        if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)
            echo "<p>Quizá su navegador no muestre correctamente esta página</p>";
    ?>
</body>
</html>