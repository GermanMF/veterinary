<style type="text/css">
    [type="radio"]:checked + label:after,
    [type="radio"].with-gap:checked + label:after 
    {
        background-color:#ef6c00;
        border: 2px solid #ef6c00;
    }
</style>
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
							mascota
						</p>
					</strong>
				</h3>
			</div>
			<form id="formMasc" class="row" method="post" enctype="application/x-www-form-urlencoded" name="formMasc">
				<div class="row">
					<div class="input-field col s12">
						<label for="name"> Nombre</label>
						<input type="text" name="name" id="name" pattern="[a-zA-Zñáéíóúü]+" required>
					</div>
				</div>
				<div class="row">
					<div class="input-field  col s6 m6 l6">
						<label for="especie">Especie:</label>
                        <br>
                            <p>
                                <input  name="masc" type="radio" id="perro" />
                                <label for="perro">Perro</label>
                            </p>
                          </div> 
                    <div class="input-field col s6 m6 l6">
                        <br>
                            <p>
                                <input name="masc" type="radio" id="gato" />
                                <label for="gato">Gato</label>
                            </p>
					</div>
				</div>
                <div class="row">
					<div class="input-field col s6 m6 l6">
						<label for="sexo">Sexo:</label>
                        <br>
                            <p>
                                <input  name="sexo" type="radio" id="H" />
                                <label for="H">H</label>
                            </p>
                          </div> 
                    <div class="input-field col s6 m6 l6">
                        <br>
                            <p>
                                <input  name="sexo" type="radio" id="M" />
                                <label for="M">M</label>
                            </p>
					</div>
				</div>
                <div class="row">
					<div class="input-field col s6 m6 l6">
						<label for="peso">Peso:</label>
						<input type="text" name="peso" id="peso" pattern="[0-9]" required >
					</div>
				</div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <label for="raza">Raza:</label> 
                    </div>
                    <div class="input-field col s12" style="padding-top: 5%;">
                        <select class="browser-default" name="raza" id="raza" required>
                            <option value="" disabled="disabled" selected="selected">Seleccione una raza</option>
                        </select>
                    </div>
                </div>
                <div class="row ">
                    <div class="input-field col s12 m6">
                        <label for="color">Color:</label> 
                    </div>
                    <div class="input-field col s12" style="padding-top: 5%;" >
                        <select class="browser-default " name="color" id="color" required>
                            <option value="" disabled="disabled" selected="selected">seleccione un color</option>
                        </select>
                    </div>
                </div>
                <div class="row">
					<div class="input-field col s12">
						<label for="name"> Fecha de nacimiento:</label>
						<input type="date" name="fecha" id="fecha"  style="padding-top: 7%;" required>
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