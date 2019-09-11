<?php

	echo '<!DOCTYPE html> <html lang="es">';
	echo '<head><meta charset="utf-8"/><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	echo '</head>';
	
	$json=array();

		include "conexion.php"	;

		$sentencia=$conexion->prepare("SELECT * FROM cultura  where nombre like 'musica' order by id desc limit 10");

		$sentencia->execute();

		if($resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC)){
		
			foreach ($resultado as $cadadato) {
				$result['título']=$cadadato['titulo'];
				$result['texto']=$cadadato['texto'];
				$result['ima']=base64_encode($cadadato['imagen']);			
						$json[]=$result;
			}			
		}else{			
			$result['ima']="no existe";
			$result['titulo']="No titulo";
			$result['texto']="No texto";
			$json['Actividad'][]=$result;
		}
				
		echo json_encode($json);
?>