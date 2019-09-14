<?php

	require_once('conexion.php');

	if(isset($_POST['btncrear'])){

		
		$imagen= addslashes(file_get_contents($_FILES['txt_nuevaAcImagen']['tmp_name']));

		$resultado=mysqli_query($conexion,"INSERT INTO cultura (nombre,categoria,titulo,texto,imagen)values('teatro',1,'$_POST[txt_nuevaActitulo]','$_POST[txt_nuevaAcTexo]','$imagen')");

		header("location:CTeatro.php");
			
	}else if(isset($_POST['btnactualizar'])){
		
				$resultado=mysqli_query($conexion,"SELECT id FROM cultura where id like '$_POST[txt_buscarid]'");

				if($fila=mysqli_fetch_array($resultado)){
						$imagen= addslashes(file_get_contents($_FILES['txt_ActuAcImagen']['tmp_name']));
						$resultado=mysqli_query($conexion,"UPDATE cultura SET titulo = '$_POST[txt_ActuActitulo]',imagen = '$imagen',texto = '$_POST[txt_ActuAcTexo]' where id = '$_POST[txt_buscarid]'");


						echo "<script type='text/javascript'>
				 		alert('Modificado con exito');
				 		window.location='CTeatro.php';			 
				 		</script>";
				}else {echo "<script type='text/javascript'>
			 		alert('Id no encontrado, verifique el id de la tabla');
			 		window.location='Cteatro.php';			 
			 		</script>";}

	}


?>
