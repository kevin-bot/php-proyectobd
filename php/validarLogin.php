<?php
	require_once('conexion.php');
	error_reporting(0);
	
	$usu=$_POST['txtusu'];
	$con=$_POST['txtcon'];
	
		$sql="select * from administrador where usuario like '$usu' and password like '$con' and estado like 1 ";
		$res=mysqli_query($conexion,$sql);
	
	if($linea=mysqli_fetch_array($res)){
			 session_start();                    
             $_SESSION["Usuario_Activo"]=$linea['nombre'];

			header("location:./../home.php");

		}
		else{
			 echo"<script type='text/javascript'>
			 alert('Datos incorrectos');
			 window.location='./../index.html';
			 </script>";
		}	
	
?>