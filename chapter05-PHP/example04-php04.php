<html>
<body>
	<?php
		// php04.php - Variables y operaciones aritméticas

		$n1 = 201;
		$n2 = "35";
		
		echo "Los numeros son ", $n1, " y ", $n2, ".<br />";
		echo "Suma: ", $n1+$n2,"<br />";
		echo "Resta: ", $n1-$n2,"<br />";
		echo "Producto: ", $n1*$n2,"<br />";
		echo "Division: ", $n1/$n2,"<br />";
		printf("Division sin decimales: %d<br />", $n1/$n2);
		echo "O bien: ", intval($n1/$n2), "<br />";
		echo "Resto de la division: ", $n1 % $n2, "<br />";
		echo "Concatenados: ", $n1 .$n2, "<br />";
	?>
</body>
</html>