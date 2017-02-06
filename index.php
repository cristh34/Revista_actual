<?php
//ini_set('default_charset', 'utf-8');
define("nombresitio", "autenticagold");
session_start();
require '00configsitio.php';

$seccion = $_GET['s'];
$parametro1 = $_GET['p1'];
$parametro2 = $_GET['p2'];

/* spl_autoload_register(function ($clase) {
    include ruta01.'/clases/' . $clase . '.php';
}); */
require ruta01.'03secciones.php';
echo '<!doctype html>
<html>
<head>';
	require ruta01.'03metas.php';
	require ruta01.'03librerias.php';
echo '</head>';
echo '<body>';
	require ruta01.'03estructura.php';
	require ruta01.'03preloads.php';
echo '</body></html>';
?>