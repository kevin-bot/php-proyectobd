<?php
	require_once('conexion.php');
	error_reporting(0);
	
	$usu=$_POST['txtusu'];
	$con=$_POST['txtcon'];
	
		$sql="select * from administrador where usuario like '$usu'";
		$res=mysqli_query($conexion,$sql);
		$linea=mysqli_fetch_array($res);
	    $usuarioBD=$linea['usuario'];
		$contraseñaBD=$linea['password'];
		$estadoBD=$linea['estado'];
		$nombreBD=$fila['nombre'];

	if($usuarioBD==$usu && $contraseñaBD==$con && $estadoBD==1){
			 session_start();                    
             $_SESSION["Usuario_Activo"]=$nombreBD;


			header("location:./../home.html");

		}
		else{
			 echo"<script type='text/javascript'>
			 alert('Datos incorrectos');
			 window.location='./../index.html';
			 </script>";
		}	
	
?>