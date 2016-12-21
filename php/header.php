<?php
$path = pathinfo($_SERVER['REQUEST_URI']);
if($path['dirname'] == '\\' || $path['dirname'] == '/bdVeterinaria'){

?>
	<head>
		<title>Magic Pets | Veterinaria</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src= "js/materialize.js"></script>
	</head>
<?php } else{ ?>
	<head>
		<title>Magic Pets | Veterinaria</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/materialize.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="../js/materialize.js"></script>
	</head>
<?php } ?>