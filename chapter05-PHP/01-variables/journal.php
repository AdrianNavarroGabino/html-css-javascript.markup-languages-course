<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<title>My Trip Around the USA on a Segway</title>
</head>

<body>
	<?php
		$parrafoSI = "<p>";
		$parrafoNO = "</p>";

		$cabecera1SI = "<h1>";
		$cabecera1NO = "</h1>";

		$cabecera2SI = "<h2>";
		$cabecera2NO = "</h2>";

		$imagen = "<img";
		$source = "images/segway2.jpg";
		$source2 = "images/segway1.jpg";
		$alternativo = "images/segway2.jpg";
		$alternativo2 = "Tony climbed on his segway";
		$cierreImagen = "/>";

		$listaOrdSI = "<ol>";
		$listaOrdNO = "</ol>";
		$listaDesordSI = "<ul>";
		$listaDesordNO = "</ul>";

		$elementoListaSI = "<li>";
		$elementoListaNO = "</li>";

		$citaBloqueSI = "<blockquote>";
		$citaBloqueNO = "</blockquote>";

		$citaSI = "<q>";
		$citaNO = "</q>";

		$saltoLinea = "<br/>";

		$titulo = "Segway'n USA";
		$fecha1 = "August 20, 2012";
		$fecha2 = "July 14, 2012";
		$fecha3 = "June 2, 2012";

		echo "$cabecera1SI
			$titulo
		$cabecera1NO

		$parrafoSI
			Documenting my trip around the US on my very own Segway!
		$parrafoNO

		$cabecera2SI
			$fecha1
		$cabecera2NO

		$imagen src=$source alt=$alternativo $cierreImagen
		$parrafoSI
			Well I made it 1200 miles already, and I passed through some interesting places on the way:
		$parrafoNO

		$listaOrdSI
			$elementoListaSI
				Walla Walla, WA
			$elementoListaNO
			$elementoListaSI
				Magic City, ID
			$elementoListaNO
			$elementoListaSI
				Bountiful, UT
			$elementoListaNO
			$elementoListaSI
				Last Chance, CO
			$elementoListaNO
			$elementoListaSI
				Why, AZ
			$elementoListaNO
			$elementoListaSI
				Truth or Consequences, NM
			$elementoListaNO
		$listaOrdNO

		$cabecera2SI
			$fecha2
		$cabecera2NO
		$parrafoSI
			I saw some
			$citaSI
				Burma Shave
			$citaNO style signs on the side of the road today:
		$parrafoNO

		$citaBloqueSI
			Passing cars,
			$saltoLinea When you can't see,
			$saltoLinea May get you,
			$saltoLinea A glimpse,
			$saltoLinea Of eternity.
			$saltoLinea
		$citaBloqueNO

		$parrafoSI
			I definitely won't be passing any cars.
		$parrafoNO

		$cabecera2SI
			$fecha3
		$cabecera2NO

		$imagen src=$source2 alt=$alternativo2 $cierreImagen

		$parrafoSI
			My first day of the trip! I can't believe I finally got everything packed and ready to go. Because I'm on a Segway, I wasn't
			able to bring a whole lot with me:
		$parrafoNO

		$listaDesordSI
			$elementoListaSI
				cellphone,
			$elementoListaNO
			$elementoListaSI
				iPod,
			$elementoListaNO
			$elementoListaSI
				digital camera and a
			$elementoListaNO
			$elementoListaSI
				protein bar
			$elementoListaNO
		$listaDesordNO

		$parrafoSI
			Just the essentials. As Lao Tzu would have said,
			$citaSI
				A journey of a thousand miles begins with one Segway.
			$citaNO
		$parrafoNO"
	?>
</body>

</html>