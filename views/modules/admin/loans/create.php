<?php 
	require_once("../../../../controllers/BookController.php");
	require_once("../../../../models/BookModel.php");
	

	$book = new BookController();
	$books = $book->create();
?>
<div class="col-12 row">
	<div class="form-group col-8">
		<select class="form-control" id="LoanBook">
			<?php  
				foreach ($books as $key => $value) {
	      			echo "<option value='".$value["libro_isbn"] ."'>".$value["libro_titulo"] ."</option>";
				} 
			?>
		</select>
	</div>
 
	<script type="text/javascript" src="../../../assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../../assets/js/chosen.jquery.min.js"></script>
</div>