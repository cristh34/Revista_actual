<?php
require ruta01.'01conectar.php';
//$lostipos=array("","actualidad","vida","entretenimiento","salud","finanzas","recetas");

$lasultimas = "SELECT * FROM a03d_articulos WHERE situacion='10' ORDER BY creacion DESC LIMIT ".nroresumenes;
$rsultimas=pg_query($laconexion, $lasultimas);
//$nroarticulos=pg_num_rows($rsultimas);
$losarticulos=array();
$nroarticulo=0;
while ($estearticulo = pg_fetch_assoc($rsultimas)) {
    $losarticulos[$nroarticulo]=$estearticulo;
	$nroarticulo++;
}
?>

<div id="carrousel">
	<div id="slides">
		<?php
		
			
			/* $articulosdestacados=array(1,2); */
			
				for($i=0;$i<3;$i++){	
					$eltipodearticulo=$lostipos[$losarticulos[$i]['refa03c']];
					$elidearticulo=$losarticulos[$i]['ide'];
					
					if ($eltipodearticulo=='actualidad'){
						$vinculoseccion='index.php?s=actualidad';
						$vinculoarticulo='index.php?s=actualidad&p1='.$elidearticulo;
					}else{
						$vinculoseccion='index.php?s=articulos&p1='.$eltipodearticulo;
						$vinculoarticulo=$vinculoseccion.'&p2='.$elidearticulo;
					}
					echo'
					<div class="lamina"><a href="'.$vinculoarticulo.'">
						<img src="medios/'.$losarticulos[$i]['ide'].'_slide.jpg" />
						<span class="titulo">'.$losarticulos[$i]['titulo'].'</span></a>
					</div>';
				}
		?>
	</div>
</div>