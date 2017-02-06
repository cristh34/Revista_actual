<?php
	if ($genbarra==true){
	$elid="cenprincipal";
	}else{
	$elid="cenprincipal100";
	}
?>
<div id="centro">
	<div id="<?php echo $elid; ?>">
		<?php
			 if (file_exists(ruta01.'10'.$laseccion.$parametro1.'.php')){
				require ruta01.'10'.$laseccion.$parametro1.'.php';			
			}else{	
				require ruta01.'10'.$laseccion.'.php';
			}
		?>					
	</div>
	<?php
		if ($genbarra==true){
		require ruta01.'03barra1.php';
		}
	?>
			
</div>
