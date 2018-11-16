<form method="post"  class="mt-5">
	
	<div class="form-group row">
		<h4 class="col-12">Datos del libro</h4>
	</div>

	<div class="row">
		<div class="col-9">
			<div class="form-group row">
				<input name="book-title" id="book-title" class="form-control col-12" type="text" placeholder="Titulo del libro" required>
			</div>
			<div class="form-group row justify-content-between" >
				<input name="isbn" type="number" class="form-control col-3"  placeholder="ISBN">
				<input name="book-volumen" type="number" class="form-control col-3"  placeholder="Volumen">
				<input name="book-edicion" type="text" class="form-control col-3"  placeholder="Edicion">

			</div>
			<div class="form-group row justify-content-between">
				<input name="book-year" type="text" class="form-control col-3"  placeholder="año">
				<input name="book-pag" type="number" class="form-control col-3" placeholder="cantidad páginas">
				
				<select name="book-languaje" class="form-control col-3">	
					<option disabled selected >Selecionar idioma</option>
					<option value="1">Español</option>
					<option value="2">Ingles</option>
					<option value="3">Portugues</option>
				</select>
			</div>
			<div class="form-group row">
				<textarea name="book-description" class="form-control col-12" rows="3" placeholder="Ingrese descripción del libro"></textarea>
			</div>
		</div>
		<div class="col-3">
			<div class="form-group">
	    		<label class="justify-content-end" id="cover-preview" for="cover-img"></label>
	    		<input name="cover-img" type="file" class="form-control-file" id="cover-img">
	  		</div>
		</div>
	</div>
	<div class="form-group row justify-content-between">
		<select name="select-autors" id="autor-add" class="form-control col-10">
			<option value="none" disabled selected>Seleccionar autor</option>
			<?php
				require_once("../../../../controllers/AuthorController.php");
	  	  		require_once("../../../../models/AuthorModel.php");
				
				$createAuthor = new AuthorController();
	      		$author = $createAuthor->create();

	      		foreach ($author as $key => $value) {
	      			echo "<option value='".$value["autor_id"] ."'>".$value["autor_apellido"]. " ". $value["autor_nombre"] ."</option>";

	      		}
	      	?>	
		</select>
		<div class="col-2">
			<a href="" class="material-icons" data-toggle="modal" data-target="#create-autor">person_add</a>
		</div>	
	</div>
	<div class="form-group row">
		<select name="select-editorial" class="form-control select-editorial col-10">
			<option value="" disabled selected>Seleccione Editorial</option>
			<?php
				require_once("../../../../controllers/EditorialController.php");
	  	  		require_once("../../../../models/EditorialModel.php");
				
				$createEditorial = new EditorialController();
	      		$editorials = $createEditorial->create();

	      		foreach ($editorials as $key => $value) {
	      			echo "<option value='". $value["id_editorial"] ."'>". $value["nombre"] ."</option>";

	      		}
			 ?>
		</select>
		<a href="" class="material-icons col-1" data-toggle="modal" id="add-new-editorial" data-target="#create-editorial">add</a>
	</div>
	<div class="form-group row">
		<textarea name="description-extra" class="col-12" name="" id="" cols="100%" rows="3" placeholder="Ingresar descripcion"></textarea>	
	</div>

	<input type="text" id="tema_cdu" name="cdu"  placeholder="CDU" value="" disabled>
	<div class="form-group row justify-content-between">
		
		<select name="select-tema" id="tema" class="form-control tema col-10" onchange="copyOnPassword(event);">
			<option value="" disabled selected>Seleccione tema</option>
			<?php
				require_once("../../../../controllers/TemaController.php");
	  	  		require_once("../../../../models/TemaModel.php");
				
				$createTema = new TemaController();
	      		$create = $createTema->create();

	      		foreach ($create as $key => $value) {
	      			echo "<option value='". $value["tema_cdu"] ."'>". $value["tema_nombre"] ."</option>";
	      		}
			 ?>
		</select>

	</div>
	<div class="row justify-content-between">
		<input class="col-4" type="submit" name="save-book" value="Agregar libro">
		<input class="col-4" type="button" name="" value="Cancelar">
	</div>
</form>
			<script>
				// Copiar lo que tiene dni en password
				function copyOnPassword(event){
					$('#tema_cdu').val(($('#tema').val()));

					//Function which allows only the entry numbers
					$('.justNumbers').keypress(function(e){
						var keynum = window.event ? window.event.keyCode : e.which;
				   		if ((keynum == 48) || (keynum == 56))
				        	return true;
				    	return /\d/.test(String.fromCharCode(keynum));
					});
				}
			</script>
<?php 
	include("create-autor-modal.php");
	include("create-editorial-modal.php"); 
	require_once("../../../../controllers/BookController.php");
	require_once("../../../../models/BookModel.php");

	
		$librito = new BookController();
		$librito->store();
		
	
?>


