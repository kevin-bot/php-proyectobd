<?php
	$json=array();

		include "conexion.php"	;

		$conexion->exec("insert into cultura (titulo) values('ósóña')");
		$sentencia=$conexion->prepare("SELECT * FROM cultura");

		$sentencia->execute();

		if($resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC)){
				

			foreach ($resultado as $cadadato) {
			
				$codificacion=mb_detect_encoding($cadadato['titulo'],"UTF_8,ISO-8859-1");
				$titulo=iconv($codificacion,"UTF-8",$cadadato['titulo']);

				$result['titulo']=$titulo;

				$result['texto']=$cadadato['texto'] ;

				$result['ima']=base64_encode($cadadato['img']);			
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