<<<<<<< HEAD
	<?php
		require_once("../../../../controllers/EditorialController.php");
  	  require_once("../../../../models/EditorialModel.php");
  	?>

=======
>>>>>>> 2d1d73a9ba73a13cfef8aeefaed8daab95aa7eae
<div class="form-group row">
	<h4 class="col-12">Datos de editorial</h4>
</div>
<div class="form-group row">
	<select name="select-editorial" class="form-control select-editorial col-8">
		<option value="" disabled selected>Seleccione Editorial</option>
		<?php
<<<<<<< HEAD
		
		      $vistaUsuario = new EditorialController();
		      $vistaUsuario -> create();
      
=======
			require_once("../../../../controllers/EditorialController.php");
  	  		require_once("../../../../models/EditorialModel.php");
			
			$createEditorial = new EditorialController();
      		$editorials = $createEditorial->create();

      		foreach ($editorials as $key => $value) {
      			echo "<option value='". $key ."'>". $value["nombre"] ."</option>";
      		}
>>>>>>> 2d1d73a9ba73a13cfef8aeefaed8daab95aa7eae
		 ?>
	</select>
	<a href="" class="material-icons col-1" data-toggle="modal" id="add-new-editorial" data-target="#create-editorial">add</a>
</div>
<div class="form-group row">
	<input name="country" class="form-control" type="text" placeholder="Localidad">
</div>

<div class="form-group row">
	<h5 class="col-12">Agregados</h5>
	<select name="select-extra" data-placeholder="Selecionar contenido extra"  class="form-control select-extra col-10">
		<option value="1">cd</option>
	</select>
	<div class="col-2">
		<a href="#" class="material-icons">done</a>
		<a href="" class="material-icons" data-toggle="modal" data-target="#create-extra">add</a>
	</div>	
</div>
<div class="form-group row">
	<textarea name="description-extra" class="col-12" name="" id="" cols="100%" rows="3" placeholder="Ingresar descripcion"></textarea>	
</div>

<div class="row">
	<table class="table">
		<thead class="thead-light">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Descripcion</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>cd</td>
				<td>Cd de contenido</td>
			</tr>
		</tbody>
	</table>
</div>