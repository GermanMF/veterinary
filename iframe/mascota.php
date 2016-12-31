<div class="pSidesFrame">
	<section>
		<div class="center">
			<div class="fixed-action-btn">
				<a id="loginr" class="posButton waves-effect waves-yellow btn-large btn-floating orange darken-3">
					<i class="material-icons">replay</i>
				</a>
			</div>
			<h3 class="center">
				<strong>
					Registrar
					<p>
						mascota
					</p>
				</strong>
			</h3>
		</div>
		<form id="formMasc" class="row" method="post" enctype="application/x-www-form-urlencoded" name="formMasc">
			<div class="row">
				<div class="col s12">
					<div class="input-field">
						<label for="name">Nombre de la mascota</label>
						<input type="text" name="name" id="name" pattern="[a-zA-Zñáéíóúü]+" required>
					</div>
				</div>
			</div>

			<div class="row valign-wrapper">
				<div class="col s9 m10 l10">
					<label for="prop">Propietario:</label> 
					<select name="prop" id="prop" required>
						<option value="" selected disabled>Seleccione un propietario</option>
						<option value="">Nada</option>
					</select>
				</div>
				<div class="col s3 m2 l2 valign">
					<a class="btn flatButton waves-effect waves-light" id="addProp">
						<i class="material-icons">add</i>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col l6 s12">
					<div class="col s6">
						<p class="center">Especie: </p>
					</div>
					<div class="col s6">
						<div class="row">
							<div class="col s12">
								<input  name="especie" type="radio" id="perro"/>
								<label for="perro">Perro</label>
							</div>
							<div class="col s12">
								<input name="especie" type="radio" id="gato" />
								<label for="gato">Gato</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col l6 s12">
					<div class="col s6">
						<p class="center">Sexo:</p>
					</div> 
					<div class="col s6">
						<div class="col s12">
							<input  name="sexo" type="radio" id="H" />
							<label for="H">Hembra</label>
						</div>
						<div class="col s12">
							<input  name="sexo" type="radio" id="M" />
							<label for="M">Macho</label>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s6">
					<label for="peso">Peso (kg):</label>
					<input type="number" name="peso" id="peso" min="0" step="0.1" required>
				</div>
				<div class="col s6 valign-wrapper">
					<div class="col s11 m10 l10">
						<label for="color">Color:</label> 
						<select name="color" id="color" required>
							<option value="" selected disabled>Seleccione un color</option>
							<option value="">Nada</option>
						</select>
					</div>
					<div class="col s1 m2 l2 valign">
						<a class="btn flatButton btnCh waves-effect waves-light" id="addCol">
							<i class="material-icons">add</i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s6 valign-wrapper">
					<div class="col s10 m10 l10">
						<label for="raza">Raza:</label> 
						<select name="raza" id="raza" required>
							<option value="" selected disabled>Seleccione una raza</option>
							<option value="">Nada por aqui</option>
						</select>
					</div>
					<div class="col s2 m2 l2 valign pZero">
						<a class="btn flatButton btnCh waves-effect waves-light" id="addRaza">
							<i class="material-icons">add</i>
						</a>
					</div>
				</div>
				<div class="col s6">
					<label for="name"> Fecha de nacimiento:</label>
					<input type="date" class="datepicker" name="fecha" id="fecha" required>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<label for="observ">Observaciones</label>
					<textarea id="observ" class="materialize-textarea" length="500"></textarea>
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