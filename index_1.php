<?php 
	include 'conexion.php';


		$query = "select * from edificio_C";
		$resulado = $conexion->query($query);

 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Presentacion BD</title>
 </head>
 <body>
 	<h1>Datos de Edificio_C</h1>


 	<?php 

 	if ($resulado->num_rows > 0) {
 		while ($fila = $resulado->fetch_assoc()) {
 			echo "<p>ID:" . $fila['ID_aula'] . ", Nombre: " . $fila['tipo_aula'] "</p>";
 		}
 	}

 	elseif () {
 		echo "No hay datos en la base de datos."; 	
 	}

 	$conexion->close();


 	 ?>
 </body>
 </html>
