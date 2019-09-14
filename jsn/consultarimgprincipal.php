<?php

	$json=array();
	
		include "conexion.php"	;

		$sentencia=$conexion->prepare("SELECT * FROM imagenes order by id desc limit 3");

		$sentencia->execute();

		if($resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC)){
		
			foreach ($resultado as $cadaimagen) {				
				$result['ima']=base64_encode($cadaimagen['imagen']);


						$json[]=$result;
			}			
		}else{			
			$result['ima']="no existe";
			$json['imagenes'][]=$result;
		}
				
		echo json_encode($json,JSON_UNESCAPED_UNICODE);		
	

?>