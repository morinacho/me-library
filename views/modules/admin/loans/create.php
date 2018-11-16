<div class="col-6">
	<form method="post">
		<input type="submit" name="buscarlibro">
	</form>
	<input type="text" name="bookName" placeholder="Titulo libro">

</div>
<div class="col-6">
	<input type="text" name="bookName" placeholder="Nombre socio">
</div>

<?php 
	if (isset($_POST['buscarlibro'])) {
?>
	<script type="text/javascript">
		alert("Hola");
	</script>
<?php 
}
 ?>

	
