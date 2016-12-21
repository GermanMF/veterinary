<?php

switch ($_GET['case']) {
	case 1:
	login();
	break;
	case 2:
	registro();
	break;
	default:
	break;
}

function login(){

}

function registro(){
	include 'conexion.php';
	if(isset($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['name1'])){
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		if($pass1 != $pass2){
			echo '1';
		}
		else{
			$state = $conex -> prepare("INSERT INTO usuario ('nombre', 'password', 'fechaLog') VALUES (?,?,?)");
			$state -> bind_param("sss",$nombre,$password,$fechaLog);
			$nombre = $_POST['name1'];
			$password = $pass1;
			$fechaLog = date('Y-m-d H:i:s');
			$state -> execute();
			$state -> close();
			$conex -> close();
			echo '2';
		}

	}
}



?>