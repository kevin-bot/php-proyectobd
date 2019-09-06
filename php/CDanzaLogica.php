<?php

	require_once('conexion.php');

	if(isset($_POST['btncrear'])){

		
		 $imagen= addslashes(file_get_contents($_FILES['txt_nuevaAcImagen']['tmp_name']));
	

		$resultado=mysqli_query($conexion,"INSERT INTO cultura (nombre,categoria,titulo,texto,imagen)values('danza',1,'$_POST[txt_nuevaActitulo]','$_POST[txt_nuevaAcTexo]','$imagen')");

		header("location:./../home.html");
			

	}else if(isset($_POST['btnactualizar'])){
		
				echo "Este es el titulo ".$_POST['txt_ActuActitulo'];
				echo $_POST['txt_ActuAcImagen'];
				echo $_POST['txt_ActuAcTexo'];

	}


?>
