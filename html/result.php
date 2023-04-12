<?php
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
setlocale(LC_TIME, 'spanish');

$fecha = $_POST['fecha'];
//$fecha_norml = strftime("%A, %d de %B del %G.", $fecha);
$hora = $_POST['hora'];
//$hora_norml = strftime("%H:%M"."%p", $hora);
$personas = $_POST['cantidad'];
$oficinas = $_POST['oficinas'];

echo 'Fecha: '.$fecha.'<br>'.'Hora: '.$hora.'<br>'.'Personas: '.$personas.'<br>'.'Oficina escogida: '.$oficinas;

?>