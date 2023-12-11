<?php 

	$host = "localhost";
	$usuario = "root";
	$contraseña = "";
	$BD = "proyecto_transversal";

	$conexion = new mysqli_connect($host, $usuario, $contraseña, $BD);


	if ($conexionn->connect_error) {
		die("error de conexion:  ", $conexion->connect_error);
	}

 ?>
