<div class="form-group row">
	<h4 class="col-12">Datos del usuario</h4>
</div>
<div class="row">
	<div class="col-10">
		<div class="form-group row justify-content-around">
			<input type="name" class="form-control col-5" id="user-name" name="user-name" placeholder="Nombre">
			<input type="lastname" class="form-control col-5" id="user-lastname" name="user-lastname" placeholder="Apellido">
		</div>
		<div class="form-group row justify-content-around">
       		 <input type="number" class="form-control col-5" id="user-dni" name="user-dni" placeholder="Dni" onkeyup="copyOnPassword(event);">
       		 <input type="password" class="form-control col-5" id="user-password" name="user-password" disabled placeholder="********">
		</div>
		<div class="form-group row justify-content-around">
			<input type="mail" class="form-control col-5" id="user-mail" name="user-mail" placeholder="Email">
			<input type="text" class="form-control col-5" id="user-phone" name="user-phone" placeholder="Telefono">
		</div>

		<div class="form-group row justify-content-around">
			
			<input type="address" class="form-control col-5" id="user-address" name="user-address" placeholder="Direccion">
			
			<select class="form-control col-5" id="tipo-user" name="">
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
<script>
	// Copiar lo que tiene dni en password
	function copyOnPassword(event){
		$('#user-password').val(($('#user-dni').val()));

		//Function which allows only the entry numbers
		$('.justNumbers').keypress(function(e){
			var keynum = window.event ? window.event.keyCode : e.which;
	   		if ((keynum == 48) || (keynum == 56))
	        	return true;
	    	return /\d/.test(String.fromCharCode(keynum));
		});
	}
</script>