<?php
$path = pathinfo($_SERVER['REQUEST_URI']);
if($path['dirname'] == '\\' || $path['dirname'] == '/bdVeterinaria'){
?>

	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src= "js/materialize.js"></script>

<?php } else{ ?>

	<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="../js/materialize.js"></script>

<?php } ?>