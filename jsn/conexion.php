<?php
	
	try {
		
		$nom_bd="tuinvest_bienestaruniversitario";
		$nom_usuario="tuinvest_usuario";
		$contraseña_usu="carlos*usuario*kevin";
		$direccion_host="localhost";

		$conexion=new PDO("mysql:host=$direccion_host;dbname=$nom_bd", "$nom_usuario", "$contraseña_usu"); 

		/*$conexion=new PDO("mysql:host=localhost;dbname=tuinvest_bienestaruniversitario", "tuinvest_usuario", "carlos*usuario*kevin");*/

	} catch (Exception $e) {
			echo "La conexion fallo";
	}


?>