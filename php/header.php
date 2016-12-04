<?php
$path = pathinfo($_SERVER['REQUEST_URI']);
if($path['dirname'] == '\\'){
	echo '
	<head>
		<title>Magic Pets | Veterinaria</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
		rel="stylesheet">
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src= "js/materialize.js"></script>
	</head>
	';
}
else{
	echo '
	<head>
		<title>Magic Pets | Veterinaria</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/materialize.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
		rel="stylesheet">
		<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="../js/materialize.js"></script>
	</head>
	';
}
?>