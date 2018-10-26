<form method="post" action="" class="mt-5">
	<nav>
		<div class="nav nav-tabs justify-content-end" id="nav-newuser-tab" role="tablist">
			<a class="nav-item nav-link active align-content-center" id="book-data-tab" data-toggle="tab" href="#book-data" role="tab">Datos usuario</a>
			<a class="nav-item nav-link" id="autor-data-tab" data-toggle="tab" href="#autor-data" role="tab">Datos académico</a>
		</div>
	</nav>
	<div class="tab-content" id="nav-newuser">
		<div class="tab-pane fade show active" id="user-data" role="tabpanel">
			<?php @include("user-data.php"); ?>
		</div>
		<div class="tab-pane fade" id="academy-data" role="tabpanel">
			<?php @include("academy-data.php") ?>
		</div>
	</div>
	<div class="row justify-content-between">
		<input class="col-4" type="submit" name="save-user" value="Crear Usuario">
		<input class="col-4" type="button" name="" value="Cancelar">
	</div>
</form>
<?php
	require_once("../../../../controllers/UserController.php");
	require_once("../../../../models/UserModel.php");

	if(isset($_POST["save-user"])){
		$createuser = new UserController();
		$createuser->store();
	}
?>	