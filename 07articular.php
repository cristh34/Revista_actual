<?php
require ruta01.'01interpretaurls.php';
require ruta01.'01conectar.php';
//$lostipos=array("","actualidad","vida","entretenimiento","salud","finanzas","recetas");

$eltipo=false;
$cuantostipos=count($lostipos);
for ($x=0;$x<$cuantostipos;$x++){
	//
	if ($lostipos[$x]==$tipoarticulo){
		$eltipo=$x;
	}
}

		//conectar, pedir datos segun para1 (tipo de articulo )y para2(articulo), segun conf de articulo generar $debarra
		
		//porahora $seccion
		//$debarra=1;
		
		//requerir 01interpretaurls.php $tipoarticulo
	
?>
<div id="centro">
	<div id="cenprincipal">
	<!-- id segun $debarra -->
		<?php
			if (file_exists(ruta01.'09ecabezadode'.$tipoarticulo.'.php')){
				require ruta01.'09ecabezadode'.$tipoarticulo.'.php';			
			}
			if ($eltipo!=false){
				if ($elarticulo!=false){
					//echo 'buscando el articulo de '.$tipoarticulo.' nro '.$elarticulo;
					//muestra el articulo
					$esemismo = "SELECT * FROM a03d_articulos WHERE situacion='10' AND ide=".$elarticulo."  AND refa03c=".$eltipo ;
					$rsesemismo=pg_query($laconexion, $esemismo);	
					$estemismo = pg_fetch_assoc($rsesemismo);
					
					if ($estemismo['titulo']!=""){
						echo "<h2>".$estemismo['titulo']."</h2><br>";
						echo '<div class="imgppal"><img src="medios/'.$estemismo['ide'].'_slide.jpg" /></div><br>';
						//echo '<div class="imgppal"><img src="medios/'.$elarticulo.'_slide.jpg" /></div><br>';
						echo $estemismo['contenido'];
						//fin muestra articulo
						$debarra= $estemismo['plantilla'];
					}else{
						echo "articulo no disponible";
						$debarra=1;
					}
				}else{
					//echo '<h2>'.$tipoarticulo.'</h2>';
					//cargar lista de ultimos
					$debarra=1;
						$lasultimas = "SELECT * FROM a03d_articulos WHERE situacion='10' AND  refa03c=".$eltipo." ORDER BY creacion DESC LIMIT ".nroresumenes;
						$rsultimas=pg_query($laconexion, $lasultimas);
						//$nroarticulos=pg_num_rows($rsultimas);
						$losarticulos=array();
						$nroarticulo=0;
						while ($estearticulo = pg_fetch_assoc($rsultimas)) {
							$losarticulos[$nroarticulo]=$estearticulo;
							$nroarticulo++;
						}
							if ($nroarticulo>0){
								// fin lista ultimos
								// impresion ultimos
								$nroart=count($losarticulos);
								/* $nroart=4; */
								for($i=0;$i<$nroart;$i++){
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
											
											<span class="m4"><a href="'.$vinculoarticulo.'">'.$losarticulos[$i]['titulo'].'</a></span><br> 
												<span class="r1contenido"> 
														'.$losarticulos[$i]['resumen'].'
													<a href="'.$vinculoarticulo.'">mas</a>		
												</span>	
											<div class="limpia">  	 
											</div>	
										</div>';
								}
								// impresion
							}else{
								echo '<br>No hay artículos en esta sección';
							}
				}				
			}else{
				$debarra=1;
				echo '<br>No existe esa sección';
			}
		?>					
	</div>
	<?php
		if ($debarra>0){
		//if (($debarra>0) and ($eltipo!=false)){
		require ruta01.'03barra'.$debarra.'.php';
		}
	?>
			
</div>
