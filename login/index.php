<!DOCTYPE html>
<html>
<?php include '../php/header.php'; ?>
<body class="bgBlue">
	<section id="f1">
		<form id="form1" class="row" method="post" enctype="application/x-www-form-urlencoded" name="form1">
			<h2 class="center row">
				<strong class="col s12">
					Inicia Sesión
				</strong>
			</h2>
			<div class="row pTop10">
				<div class="input-field col s12">
					<i class="material-icons prefix">account_circle</i>
					<label for="name"> Usuario</label>
					<input type="text" name="name" class="validate" id="name" required>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">vpn_key</i> 
					<input type="password" name="pass" class="validate" id="pass" required>
					<label for="pass" class= "left">Password</label>
				</div>
			</div>
			<div class="row">
				<button type="submit" class="col s12 m5 waves-effect waves-yellow btn orange darken-3">
					Iniciar sesion
				</button>
				<div class="col s12 m2">
				</div>
				<a id="registro" class="pButtons col s12 m5 waves-effect waves-yellow btn orange darken-3">
					Registrarse
				</a>
			</div>
		</form>
	</section>
	<section id="f2" class="hid">
		<form id="form2" class="row" method="post" enctype="application/x-www-form-urlencoded" name="form2">
			<div class="row valign-wrapper">
				<a id="loginr" class="valign waves-effect waves-yellow btn-floating orange darken-3 mTop5"><i class="material-icons">replay</i></a>
				<h2 class="col l10 center">
					<strong>
						Registro
					</strong>
				</h2>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">account_circle</i>
					<label for="name1"> Usuario</label>
					<input type="text" name="name1" class="validate" id="name1" required>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">vpn_key</i> 
					<input type="password" name="pass1" class="validate" id="pass1" minlength="4" required>
					<label for="pass1" class= "left">Password</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">vpn_key</i> 
					<input type="password" name="pass2" class="validate" id="pass2" minlength="4" required>
					<label for="pass2" class= "left">Repite Password</label>
				</div>
			</div>
			<div class="center">
				<button type="submit" class="waves-effect waves-yellow btn orange darken-3">
					Registrarse
				</button>
			</div>
		</form>
	</section>
</body>
<script>
	$(document).ready(function() {
		$("#registro").on('click', function(event) {
			$("#f1").fadeOut('fast', function() {
				$("#f2").css('display','flex').hide().fadeIn();
			});
		});

		$("#loginr").on('click', function(event) {
			$("#f2").fadeOut('fast', function() {
				$("#f1").css('display','flex').hide().fadeIn();
			});
		});
	});

	$("#form2").submit(function() {
		$.ajax({
			url: '../php/login.php?case=2',
			type: 'POST',
			data: $(this).serialize(),
			success: function(data){
				if(data == '1'){
					Materialize.toast("Las contraseñas no coinciden", 3000);
				}
				else if(data == '2'){
					Materialize.toast("Registro correcto", 3000);
				}
			},
			error: function(data){
				alert("mal" + data);
			}
		});
		return false;
	});

</script>
</html>