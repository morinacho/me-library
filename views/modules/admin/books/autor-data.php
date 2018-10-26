<div class="form-group row">
	<h4 class="col-12">Datos del autor</h4>
</div>
<div class="form-group row justify-content-between">
	<select name="select-autors" id="autor-add" class="form-control col-6">
		<option value="none" disabled selected>Seleccionar autor</option>
		<option value="Robert Resnick">Robert Resnick</option>
		<option value="Pablo Risk">Pablo Risk</option>
	</select>
	<select name="select-tipo-autors" id="autor-tipo" class="form-control col-4">
		<option value="none" disabled selected>Tipo autor</option>
		<option value="Principal">Principal</option>
		<option value="Colaborador">Colaborador</option>
		<option value="Ilustrador">Ilustrador</option>
		<option value="Traductor">Traductor</option>
	</select>
	<div class="col-2">
		<a href="#" id="add-autor"class="material-icons">how_to_reg</a>
		<a href="" class="material-icons" data-toggle="modal" data-target="#create-autor">person_add</a>
	</div>	
</div>

<div class="row">
	<table id="list-autors" class="table">
		<thead class="thead-light">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido</th>
				<th scope="col">Tipo</th>
			</tr>
		</thead>
		<tbody id="tbody">

		</tbody>
	</table>
</div>
<!---->