<?php if ( ! defined('nombresitio')) exit('errormysql');?>

<div id="fondo1">
	<div id="todo">	
		<div id="contenido">
			
			<?php 
			if (concintillo==true){
				require ruta01.'03cintillo.php';
			}
			require ruta01.'03encabezado.php';
			require ruta01.'03menusuperior.php';	
			require ruta01.'07'.$plantilla.'.php';		
			require ruta01.'03p4.php';
			require ruta01.'03pie.php';
			?>
			
		</div>
	</div>
</div>