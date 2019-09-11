<?php
	
	try {
		
	/*	$nom_bd="tuinvest_bienestaruniversitario";
		$nom_usuario="tuinvest_usuario";
		$contraseña_usu="carlos*usuario*kevin";
		$direccion_host="localhost";

		$conexion=new PDO("mysql:host=$direccion_host;dbname=$nom_bd", "$nom_usuario", "$contraseña_usu"); */

		$conexion=new PDO("mysql:host=localhost;dbname=proyectobd", "root", "",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				

	} catch (Exception $e) {
			echo "La conexion fallo";
	}


?>