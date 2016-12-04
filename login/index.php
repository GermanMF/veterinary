<!DOCTYPE html>
<html>
<?php include '../php/header.php'; ?>
<body class="bgBlue">
	<section id="cont">
		<form id="form1" class="col s12" method="post" enctype="application/x-www-form-urlencoded" name="form1">
			<h2 class="center">
				<strong>
					Inicia Sesión
				</strong>
			</h2>
			<div class="column pTop10">
				<div class="input-field row s6">
					<i class="material-icons prefix">account_circle</i>
					<label for="name"> Usuario</label>
					<input type="text" name="name" class="validate" id="name" required>
				</div>
			</div>
			<div class="row">
				<div class="input-field row s6">
					<i class="material-icons prefix">vpn_key</i> 
					<input type="password" name="pass" class="validate" id="pass" required>
					<label for="pass" class= "left">Password</label>
				</div>
			</div>
			<div class="row">
				<a class="col s12 m5 waves-effect waves-yellow btn orange darken-3">
					Registrarse
				</a>
				<div class="col s12 m2">
				</div>
				<button type="submit" class="col s12 m5 waves-effect waves-yellow btn orange darken-3">
					Iniciar sesion
				</button>
			</div>
		</form>
	</section>
</body>
</html>