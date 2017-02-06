<?php
	if ($laseccion=='actualidad'){
		$tipoarticulo='actualidad';
		
		if (isset($parametro1)){
			$elarticulo=$parametro1;
		}else{
			$elarticulo=false;
		}			
	}else{
		$tipoarticulo=$parametro1;
		if (isset($parametro2)){
			$elarticulo=$parametro2;
		}else{
			$elarticulo=false;
		}
	}
?>
