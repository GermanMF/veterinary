<!DOCTYPE html>
<html>
<?php include '../php/header.php'; ?>
<body class="bgBlue">
	<!-- <section>
		<div class="valign-wrapper fHeight fWidth">
			<div class="valign fWidth">
				<h2 class="center">
					Inicia sesión
				</h2>
				<div class="row">
					<form class="col s12">
						<div class="row fForm">
							<div class="input-field col s12">
								<i class="material-icons prefix">account_circle</i>
								<label for="name"> Usuario</label>
								<input type="text" name="name" class="validate" id="name">
							</div>
						</div>
						<div class="row fForm">
							<div class="input-field col s12">
								<i class="material-icons prefix">vpn_key</i> 
								<input type="password" name="pass" class="validate" id="pass">
								<label for="pass" class= "left">Password</label>
							</div>
						</div>
						<div class="row center pButtons">
							<div class="col m6 l6 mButtons">
								
							</div>
							<div class="col m6 l6 mButtons">
								<a class="waves-effect waves-yellow btn orange darken-3">
									Registrarse
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section> -->
	<section id="cont">
		<form id="form1" class="col s12" action="conexion/login.php" method="post" enctype="application/x-www-form-urlencoded" name="login_form">
			<h2 class="center">
				<strong>
					Inicia Sesión
				</strong>
			</h2>
			<div class="column pTop10">
				<div class="input-field row s6">
					<i class="material-icons prefix">account_circle</i>
					<label for="name"> Usuario</label>
					<input type="text" name="name" class="validate" id="name">
				</div>
			</div>
			<div class="row">
				<div class="input-field row s6">
					<i class="material-icons prefix">vpn_key</i> 
					<input type="password" name="pass" class="validate" id="pass">
					<label for="pass" class= "left">Password</label>
				</div>
			</div>
			<div class="row">
				<a class="col s12 m5 waves-effect waves-yellow btn orange darken-3">
					Iniciar sesion
				</a>
				<div class="col s12 m2">
					
				</div>
				<a class="col s12 m5 waves-effect waves-yellow btn orange darken-3">
					Registrarse
				</a>
			</div>
		</form>
	</section>
</body>
</html>