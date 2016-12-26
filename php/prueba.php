<?php

date_default_timezone_set('America/Mexico_City');
include 'conexion.php';
$state1 = $conex -> prepare("UPDATE usuario SET fechaLog = ? WHERE nombre = ?");
$state1 -> bind_param('ss',$date,$name1);
$name1 = utf8_decode('Germán');
$date = date('Y-m-d H:i:s');
$state1 -> execute();
echo $date." time() ".date('H:i:s')."\n";

?>