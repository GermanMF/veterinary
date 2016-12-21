<?php
$server = "localhost";
$user = "root";
$pass = "1352";
$bd = "veterinaria";

$conex = new mysqli($server,$user,$pass,$bd);
// if($conex -> errno) echo'No se pudo realizar la conexion';
$conex -> set_charset("utf-8");

?>