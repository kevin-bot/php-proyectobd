<?php
	
	try {
		
		$nom_bd="proyectobd";
		$nom_usuario="root";
		$contraseña_usu="";
		$direccion_host="localhost";

		$conexion=new PDO("mysql:host=$direccion_host;dbname=$nom_bd", "$nom_usuario", "$contraseña_usu"); 

		/*$conexion=new PDO("mysql:host=localhost;dbname=tuinvest_bienestaruniversitario", "tuinvest_usuario", "carlos*usuario*kevin");*/

	} catch (Exception $e) {
			echo "La conexion fallo";
	}


?>