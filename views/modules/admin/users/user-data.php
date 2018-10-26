<div class="form-group row">
	<h4 class="col-12">Datos del usuario</h4>
</div>

<div class="row">
	<div class="col-10">
		<div class="form-group row justify-content-around">
			<input type="text" class="form-control col-5" id="user-name" name="user-name" placeholder="Nombre">
			<input type="text" class="form-control col-5" id="user-lastname" name="user-lastname" placeholder="Apellido">
		</div>
		<div class="form-group row justify-content-around">
			<input type="text" class="form-control col-4" id="user-dni" name="user-dni" placeholder="Dni">
			<input type="email" class="form-control col-6" id="user-email" name="user-email" placeholder="Email">
		</div>
		<div class="form-group row justify-content-around">
			<input type="text" class="form-control col-3" id="user-phone" name="user-phone" placeholder="Telefono">
			<input type="text" class="form-control col-4" id="user-adrress" name="user-adrress" placeholder="Direccion">
			<select class="form-control col-3" id="tipo-user" name="">
				<option value="0" selected disabled>Selecctionar tipo</option>
				<option value="1">Alumno</option>
				<option value="2">Docente</option>
				<option value="3">No docente</option>
				<option value="4">Administrador</option>
			</select>
		</div>
		
	</div>
	<div class="col-2">
		<div class="form-group">
    		<label class="justify-content-end" id="user-pic" for="user-img"></label>
    		<input type="file" class="form-control-file" id="user-img">
  		</div>
	</div>
</div>