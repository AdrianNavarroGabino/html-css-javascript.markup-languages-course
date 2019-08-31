<?php

	// Tipo de flujo
	header("Content-Type: application/json");
	
    // Definición de la consulta SQL
	$consulta_sql = "select * from vehiculos;";

	// Paramètres SGBD MySQL
	$servidor_mysql = "localhost";
	$usuario_mysql = "adrian";
	$password_mysql = "1234";
	$bd_mysql = "coches";

	if ( ( $connexion_mysql = mysqli_connect( $servidor_mysql, $usuario_mysql, $password_mysql, $bd_mysql ) )	=== FALSE )
	{
		echo "";
	}
   	else
	{
		$resultado = mysqli_query( $connexion_mysql, $consulta_sql);
       	if (mysqli_num_rows($resultado) <1)
		{
			echo "";
		}
		else
		{					
			while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC))
			{
				//echo "pasa 2:",$registro;
                    $lineas[] = $registro;
			}

			// Codificación en formato JSON 
				$datosJSON = json_encode($lineas);				
				
			// Envío del resultado al cliente
			echo $datosJSON;	
		}

	}
	
	mysqli_close($connexion_mysql);

?>