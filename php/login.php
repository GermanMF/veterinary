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
	include 'conexion.php';
	if(isset($_POST['name']) && isset($_POST['pass'])){
		$state = $conex -> prepare("SELECT nombre,password FROM usuario WHERE nombre = ? and password = ?");
		$state -> bind_param('ss',$name,$password);

		$name = utf8_decode($_POST['name']);
		$password = sha1($_POST['pass']);
		$state -> execute();

		if($state -> fetch() == 1){
			echo '1';
		}
		else{
			echo '2';
		}
		$state -> close();
		$conex -> close();
	}
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
			//Check if the new user is not setted
			$state = $conex -> prepare("SELECT nombre FROM usuario WHERE nombre = ?");
			$state -> bind_param('s',$name);

			$name = utf8_decode($_POST['name1']);
			$state -> execute();

			if($state -> fetch() > 0){
				$state -> close();
				echo '3';
			}
			else{
				//Insert into de db
				$state = $conex -> prepare("INSERT INTO usuario(nombre, password, fechaLog) VALUES (?,?,?)");
				$state -> bind_param('sss',$name,$password,$date);
				$name = utf8_decode($_POST['name1']);
				$password = sha1($pass1);
				$date = date('Y-m-d H:i:s');
				$state -> execute();
				$state -> close();
				$conex -> close();
				echo '2';
			}
		}
	}
}



?>