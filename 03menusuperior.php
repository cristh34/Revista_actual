<?php
//nombre,vinculo,ideactual,consubmenu,habilitado
//?s=ediciones&p1=gh
$elmenu[0]=array("Inicio","?s=inicio","tit",false,true);
$elmenu[1]=array("Ediciones","?s=ediciones","tit",false,true);
$elmenu[2]=array("Actualidad","?s=actualidad","tit",false,true);
$elmenu[3]=array("Artículos","","tit");
	$elmenu[3][3][0]=array("Vida","?s=articulos&p1=vida",true);
	$elmenu[3][3][1]=array("Entretenimiento","?s=articulos&p1=entretenimiento",false);
	$elmenu[3][3][2]=array("Salud","?s=articulos&p1=salud",true);
	$elmenu[3][3][3]=array("Finanzas","?s=articulos&p1=finanzas",true);
	$elmenu[3][3][4]=array("Cocina","?s=articulos&p1=cocina",true);
	$elmenu[3][3][5]=array("Hogar","?s=articulos&p1=hogar",false);
	$elmenu[3][4]=true;
	
$elmenu[4]=array("Nosotros","?s=infonosotros","tit",false,true);
//$elmenu[4]=array("Guía arcoiris","?s=guia","tit",false,false);
$elmenu[5]=array("Radio","","tit");
	$elmenu[5][3][0]=array("Historia","?s=radio&p1=historia",true);
	$elmenu[5][3][1]=array("Galeria","?s=radio&p1=galeria",true);
	$elmenu[5][3][2]=array("Yo soy rating","?s=radio&p1=rating",true);
	$elmenu[5][3][3]=array("Autentica online","",true);
	$elmenu[5][4]=false;

switch($seccion){
	case 'inicio':
	$elmenu[0][2]="titactual";
	break;
	case 'ediciones':
	$elmenu[1][2]="titactual";
	break;
	case 'actualidad':
	$elmenu[2][2]="titactual";
	break;
	case 'articulos':
	$elmenu[3][2]="titactual";
	break;
	/* case 'guia':
	$elmenu[4][2]="titactual";
	break; */
	case 'infonosotros':
	$elmenu[4][2]="titactual";
	break;
	case 'radio':
	$elmenu[5][2]="titactual";
	break;
}
?>
<div id="menu">
	<ul class="nav">
	<?php
		$arrlength=count($elmenu);
		for($x=0;$x<$arrlength;$x++)
		{
			if ($elmenu[$x][4]==true){
				if ($elmenu[$x][3]==false){
					echo '<li><a  class="'.$elmenu[$x][2].'" href="index.php'.$elmenu[$x][1].'">'.$elmenu[$x][0].'</a></li>';
				}else{
					echo '<li>';
						echo '<a href="" class="consubmenu '.$elmenu[$x][2].'">'.$elmenu[$x][0].'</a>';
						echo '<ul>';
							$subarrlength=count($elmenu[$x][3]);
							for($y=0;$y<$subarrlength;$y++){
								if ($elmenu[$x][3][$y][2]==true){
									echo '<li><a  href="index.php'.$elmenu[$x][3][$y][1].'">'.$elmenu[$x][3][$y][0].'</a></li>';
								}
							}
						echo '</ul>';					
					echo '</li>';
				}
			}
		}
	?>
	</ul>

	
	<?php
		/* 
		echo '<select  id="menuopcion" onchange="navegar()">
	<option value="" selected="selected" >Secciones</option>';
		$arrlength=count($elmenu);
		for($x=0;$x<$arrlength;$x++)
		{
			if ($elmenu[$x][4]==true){
				if ($elmenu[$x][3]==false){
					echo '<option value="'.$elmenu[$x][1].'">'.$elmenu[$x][0].'</option>';
				}else{
					echo '<optgroup label="'.$elmenu[$x][0].' »">';
							$subarrlength=count($elmenu[$x][3]);
							for($y=0;$y<$subarrlength;$y++){
								if ($elmenu[$x][3][$y][2]==true){
									echo '<option value="'.$elmenu[$x][3][$y][1].'">'.$elmenu[$x][3][$y][0].'</option>';
								}
							}					
					echo '</optgroup>';
				}
			}
		} 
	echo '</select>';
	*/
	?>
	

	
</div>