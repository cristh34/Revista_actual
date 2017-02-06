<?php
//la conexion se hace en carrousel
//$lostipos=array("","actualidad","vida","entretenimiento","salud","finanzas","recetas");

/* $lasultimas = "SELECT * FROM a03d_articulos WHERE situacion='10' ORDER BY creacion DESC LIMIT ".nroresumenes;
$rsultimas=pg_query($laconexion, $lasultimas);
//$nroarticulos=pg_num_rows($rsultimas);
$losarticulos=array();
$nroarticulo=0;
while ($estearticulo = pg_fetch_assoc($rsultimas)) {
    $losarticulos[$nroarticulo]=$estearticulo;
	$nroarticulo++;
} */
?>


<div id="colresumenes">

<?php 
	$nroart=count($losarticulos);
	/* $nroart=4; */
	$mitad=ceil($nroart/2);
	for($i=0;$i<$nroart;$i++){
	/* echo 's1-'; */
		$eltipodearticulo=$lostipos[$losarticulos[$i]['refa03c']];
		$elidearticulo=$losarticulos[$i]['ide'];
		
		if ($eltipodearticulo=='actualidad'){
			$vinculoseccion='index.php?s=actualidad';
			$vinculoarticulo='index.php?s=actualidad&p1='.$elidearticulo;
		}else{
			$vinculoseccion='index.php?s=articulos&p1='.$eltipodearticulo;
			$vinculoarticulo=$vinculoseccion.'&p2='.$elidearticulo;
		}
			echo '<div class="r1b">       
				<a href="'.$vinculoarticulo.'"><img src="medios/'.$losarticulos[$i]['ide'].'_res.jpg" alt=""></a>
				<span class="m3"><a href="'.$vinculoseccion.'">'.$eltipodearticulo.'</a></span><br>
				<span class="m4"><a href="'.$vinculoarticulo.'">'.$losarticulos[$i]['titulo'].'</a></span><br> 
					<span class="r1contenido"> 
							'.$losarticulos[$i]['resumen'].'
						<a href="'.$vinculoarticulo.'">mas</a>		
					</span>	
				<div class="limpia">  	 
				</div>	
			</div>';	

		if ((consemiespecial==true)&&($i==$mitad)){
			require ruta01.'03semiespecial.php';
		}
	}
?>		
						
</div>