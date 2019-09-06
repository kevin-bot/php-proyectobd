<?php

	require_once('conexion.php');

	if(isset($_POST['btncrear'])){

		
		 $imagen= addslashes(file_get_contents($_FILES['txt_nuevaAcImagen']['tmp_name']));
		
		$resultado=mysqli_query($conexion,"INSERT INTO cultura (nombre,categoria,titulo,texto,imagen)values('musica',1,'$_POST[txt_nuevaActitulo]','$_POST[txt_nuevaAcTexo]','$imagen')");
			
			header("location:./../home.html");

	}else if(isset($_POST['btnactualizar'])){
		
			
				/*$resultado=mysql_query($conexion,"SELECT * FROM cultura where nombre='musica' limit 5");
				while($fila=mysqli_fetch_array($resultado)){
					echo $fila['nombre'];
				}*/

				
	}

	
?>
