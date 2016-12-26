<!DOCTYPE html>
<html>
<?php include '../php/header.php'; ?>
<body>
	<section>
		<div class="valign-wrapper">
			<a id="loginr" class="valign waves-effect waves-yellow btn-floating orange darken-3 mTop3"><i class="material-icons">replay</i></a>
			<h3 class="center">
				<strong>
					Registrar
					<p>
						propietario
					</p>
				</strong>
			</h3>
		</div>
		<form id="formProp" class="row" method="post" enctype="application/x-www-form-urlencoded" name="formProp">
			<div class="row">
				<div class="input-field col s12">
					<label for="name"> Nombre</label>
					<input type="text" name="name" class="validate" id="name" required>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6 l6">
					<label for="apellidoP">Apellido Paterno</label>
					<input type="text" name="apellidoP" id="apellidoP">
				</div>
				<div class="input-field col s12 m6 l6">
					<label for="apellidoM">Apellido Materno</label>
					<input type="text" name="apellidoM" id="apellidoM">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<label for="calle">Calle y número</label>
					<input type="text" name="calle" id="calle">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<label for="colonia">Colonia</label>
					<input type="text" name="colonia" id="colonia">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l6">
					<label for="telefono">Teléfono</label>
					<input type="tel" name="telefono" id="telefono">
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
<?php include '../php/footer.php'; ?>
</html>