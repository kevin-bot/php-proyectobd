<?php



	$conexion=mysqli_connect("localhost","root","","proyectobd")

	or die("No se puede conectar");

	//$conexion=mysqli_connect("localhost","tuinvest_usuario","carlos*usuario*kevin","tuinvest_bienestaruniversitario")

	//or die("No se puede conectar");

	$conexion->set_charset('utf8');
	//mysqli_set_charset($conexion, 'utf8');
	
?>