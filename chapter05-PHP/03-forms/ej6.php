<html>
	<head>
		<title>Ejercicio 9</title>
		<script>
		function sumar(elementos)
		{
			let total=0;
		
			for (let i=0;i<elementos;i++)
				total=total+parseInt(formCompra["precio"+i].value);
			formCompra.total.value=total;
		}
		</script>
	</head>
	<body>
		<h1>Ejercicio 6</h1>
		<form name="formCompra" action="Ejercicio9.php" method="post">
			<?php
			$elementos=$_REQUEST['elementos'];
			for ($i=0;$i<$elementos;$i++)
			{
				if ($i!=$elementos-1)
				{
					?>Artículo<?php echo $i + 1?>:<input type="text" name="articulo<?php echo $i?>">Precio<?php echo $i + 1?>:<input type="text" name="precio<?php echo $i?>"><br>
				<?php
				}
				else
				{
					?>Artículo<?php echo $i + 1?>:<input type="text" name="articulo<?php echo $i?>">Precio<?php echo $i + 1?>:<input type="text" name="precio<?php echo $i?>" onblur="sumar(<?php echo $elementos?>);"><br>
				<?php
				}
			}
			?>
			Total:<input name="total" type="text"/>
		</form>
	</body>
</html>