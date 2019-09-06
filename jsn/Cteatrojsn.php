<?php
	$json=array();

		include "conexion.php"	;

		$sentencia=$conexion->prepare("SELECT * FROM cultura  where nombre like 'teatro' order by id desc limit 10");

		$sentencia->execute();

		if($resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC)){
		
			foreach ($resultado as $cadadato) {
				$result['titulo']=$cadadato['titulo'];
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