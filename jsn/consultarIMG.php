<?php

	$json=array();
	
		include "conexion.php"	;

		$sentencia=$conexion->prepare("SELECT * FROM imagenes");

		$sentencia->execute();

		if($resultado=$sentencia->fetch(PDO::FETCH_ASSOC)){

			$result['ima']=base64_encode($resultado['imagen']);
			$json[]=$result;
			
		}else{			
			$result['ima']="no existe";
			$json['imagenes'][]=$result;
		}
		echo json_encode($json);		
	

?>