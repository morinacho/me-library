<?php 
	require_once("../../../../controllers/BookController.php");
	require_once("../../../../controllers/UserController.php");
	require_once("../../../../controllers/LoanController.php");
	require_once("../../../../models/BookModel.php");
	require_once("../../../../models/UserModel.php");
	require_once("../../../../models/LoanModel.php");
	

	$book = new BookController();
	$user = new UserController();
	$loan = new LoanController();

	$books = $book->create();
	$users = $user->create(); 
?>
<div class="col-12 row">
	<div class="form-group col-8">
		<h3>Registrar nuevo prestamo</h3>
		<form method="post">	
			<div class="form-group">
				<label for="LoanBook"></label>
				<select class="form-control" id="LoanBook" name="LoanBook">
					<option disabled selected>Seleccionar libro</option>
					<?php  
						foreach ($books as $key => $value) {
			      			echo "<option value='".$value["libro_isbn"] ."'>".$value["libro_titulo"] ."</option>";
						} 
					?>
				</select>
			</div>
			<div class="form-group">
				<select class="form-control" id="LoanUser" name="LoanUser">
					<option disabled selected>Seleccionar socio</option>
					<?php  
						foreach ($users as $key => $value) {
			      			echo "<option value='".$value["usuario_dni"] ."'>".$value["usuario_nombre"] . " ". $value["usuario_apellido"] ."</option>";
						} 
					?>
				</select>
			</div>
			<div class="form-group">
				<input type="submit" name="newloan" value="Registrar" class="btn btn-primary col-12">
			</div>
		</form>
	</div>
	<script type="text/javascript" src="../../../assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../../assets/js/chosen.jquery.min.js"></script>
</div>
<?php  
	$loan->store();
?>