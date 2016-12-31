<div class="pSidesFrame">
	<section>
		<div class="center">
			<div class="fixed-action-btn">
				<a id="loginr" class="posButton waves-effect waves-yellow btn-large btn-floating orange darken-3"><i class="material-icons">replay</i></a>
			</div>
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
					<input type="text" name="name" id="name" pattern="[a-zA-Zñáéíóúü]+" required>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6 m6 l6">
					<label for="apellidoP">Apellido Paterno</label>
					<input type="text" name="apellidoP" id="apellidoP" pattern="[a-zA-Zñáéíóúü]*">
				</div>
				<div class="input-field col s6 m6 l6">
					<label for="apellidoM">Apellido Materno</label>
					<input type="text" name="apellidoM" id="apellidoM" pattern="[a-zA-Zñáéíóúü]*">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<label for="calle">Calle y número</label>
					<input type="text" name="calle" id="calle" pattern="[a-zA-Zñáéíóúü0-9#\-]+">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<label for="colonia">Colonia</label>
					<input type="text" name="colonia" id="colonia" pattern="[a-zA-Zñáéíóúü0-9]+">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<label for="telefono">Teléfono</label>
					<input type="tel" name="telefono" id="telefono" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}">
				</div>
				<div class="input-field col s6">
					<label for="telefono">Celular</label>
					<input type="tel" name="celular" id="celular" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea id="observ" class="materialize-textarea" length="500"></textarea>
					<label for="observ">Observaciones</label>
				</div>
			</div>
			
			<div class="center">
				<button type="submit" class="waves-effect waves-yellow btn orange darken-3">
					Insertar
				</button>
			</div>
		</form>
	</section>
</div>