<?php if ( ! defined('nombresitio')) exit('errormysql');?>
<?php
$titulo='Autenticagold';
	$septitulos=' - ';
	$subtitulo='';
if (!(isset($seccion))||($seccion=='index')||($seccion=='inicio')){
	$laseccion='inicio';	
	$subtitulo='Inicio';
	$plantilla='inicial';
}else{
	switch ($seccion)
	{
	case 'x23':
	  $laseccion='admin';
	  $subtitulo='a';
	  $plantilla='administracion';
	  $genbarra=false;
	  break;
	case 'pruebas':
	  $laseccion='pruebas';
	  $subtitulo='pruebas';
	  $plantilla='generica';
	  $genbarra=true;
	  break;
	case 'ediciones':
	  $laseccion='ediciones';
	  $subtitulo='Ediciones';
	  $plantilla='generica';
	  $genbarra=true;
	/*   $detalles=array("10como.php","Cómo funciona"); */
	  break;
	case 'actualidad':
	  $laseccion='actualidad';
	  $subtitulo='Actualidad';
	  $plantilla='articular';
	  break;
	case 'articulos':
	  $laseccion='articulos';
	  $subtitulo=ucfirst($parametro1);
	  // $plantilla='generica';//pero dependiente
	 $plantilla='articular';//pero dependiente
	   $genbarra=true;
	  break;
	case 'guia':
	  $laseccion='guia';
	  $subtitulo='Guia arcoiris';
	  $plantilla='generica';
	  $genbarra=true;
	  break;
	case 'infonosotros':
	  $laseccion='infonosotros';
	  $subtitulo='Nosotros';
	  $plantilla='generica';
	  $genbarra=true;
	  break;
	case 'radio':
	  $laseccion='radio';
	  $subtitulo='radio/'.$parametro1;
	  $plantilla='generica';
	  $genbarra=true;
	  break;
	case 'info':
	  $laseccion='info';
	  $subtitulo='';
	  $plantilla='generica';
		switch($parametro1){
			case 'nosotros':
			$genbarra=true;
			$subtitulo='Quienes somos';
			break;
			case 'contacto':
			$genbarra=false;
			$subtitulo='Contacto';
			break;
			}
	  break;
	default:
	  $laseccion='error';
	  $subtitulo='';
	  $plantilla='generica';
	  $genbarra=false;
	  /* $detalles=array("10error.php","Equivocado"); */
	} 
}

if ($subtitulo!=''){
$titulo.=$septitulos.$subtitulo;
}else{
$titulo='no existe';
	$laseccion='error';
	$subtitulo='';
	$plantilla='generica';
	$genbarra=false;
	$detalles=array("10error.php","Equivocado");
}
?>