<?php 
	include_once("models/ConexionModel.php");
	
	class Seeder{
		/*
		 * Create data base
		 */
		public function create(){
			
		}

		/*
		 * Load data base
		 */
		public function load(){
			$query = ConexionModel::conect()->prepare(
			"
				INSERT INTO usuario (usuario_dni, usuario_nombre, usuario_apellido, usuario_direccion, usuario_telefono, usuario_mail, usuario_password) 
				  	VALUES ( '32145987', 'Juan', 'Gil','Calle false 1234', '2657556641', 'juangil@gmail.com', '32145987');
			    INSERT INTO usuario (usuario_dni, usuario_nombre, usuario_apellido, usuario_direccion, usuario_telefono, usuario_mail, usuario_password) 
					VALUES ( '36954357', 'Pedro', 'Perez','Calle 13 45', '2665896998', 'pedroperez@gmail.com', '36954357');
				INSERT INTO usuario (usuario_dni, usuario_nombre, usuario_apellido, usuario_direccion, usuario_telefono, usuario_mail, usuario_password) 
					VALUES ( '42568638', 'Araceli', 'Gonzales','Estrella -85', '2657456235', 'agonzalez@gmail.com', '42568638');
				INSERT INTO usuario (usuario_dni, usuario_nombre, usuario_apellido, usuario_direccion, usuario_telefono, usuario_mail, usuario_password) 
				    VALUES ( '39845263', 'Flor', 'Cita','Micasalas 16', '2657369574', 'florcita@gmail.com', '39845263');
			    INSERT INTO usuario (usuario_dni, usuario_nombre, usuario_apellido, usuario_direccion, usuario_telefono, usuario_mail, usuario_password) 
				    VALUES ( '46845963', 'Gonzalo', 'Olguin','Calle false 1234', '2657556641', 'juanGil@gmail.com', '46845963');
			    /* Carga de 5 autores */
			    INSERT INTO autor (autor_nombre, autor_apellido) VALUES ('Jose Manuel', 'Sanchez Ron');
			    INSERT INTO autor (autor_nombre, autor_apellido) VALUES ('James', 'Lovelock');
			    INSERT INTO autor (autor_nombre, autor_apellido) VALUES ('Bill', 'Bryson');
			    INSERT INTO autor (autor_nombre, autor_apellido) VALUES ('Facundo', 'Manes');
			    INSERT INTO autor (autor_nombre, autor_apellido) VALUES ('Martin', 'Sierra');
				/* Cargo los temas del cdu */
			    INSERT INTO tema (tema_cdu, tema_nombre) VALUES ('0','GENERALIDADES');
			    INSERT INTO tema (tema_cdu, tema_nombre) VALUES ('1','RELIGION');
			    INSERT INTO tema (tema_cdu, tema_nombre) VALUES ('2','CIENCIAS SOCIALES Y DISCIPLINAS AFINES');
			    INSERT INTO tema (tema_cdu, tema_nombre) VALUES ('3','EDUCACION');
			    INSERT INTO tema (tema_cdu, tema_nombre) VALUES ('4','CIENCIAS PURAS');
			    INSERT INTO tema (tema_cdu, tema_nombre) VALUES ('5','CIENCIAS APLICADAS ');
			    INSERT INTO tema (tema_cdu, tema_nombre) VALUES ('6','ARTE - DEPORTES ');
			    INSERT INTO tema (tema_cdu, tema_nombre) VALUES ('7','LINGUISTICA -FILOLOGIA - LITERATURA');
			    INSERT INTO tema (tema_cdu,tema_nombre) VALUES ('8','GEOGRAFIA -BIOGRAFIAS - HISTORIA');
				/* Cargo los idiomas */
			    INSERT INTO idioma (idioma_descripcion) VALUES ('Espanol');
			    INSERT INTO idioma (idioma_descripcion) VALUES ('Ingles');
			    INSERT INTO idioma (idioma_descripcion) VALUES ('Portuguez');
				/* Cargo editoriales */
			    INSERT INTO editorial (editorial_nombre, editorial_direccion_fiscal) VALUES ('ALIENTA EDITORIAL','Calle Falsa');
			    INSERT INTO editorial (editorial_nombre, editorial_direccion_fiscal) VALUES ('AUSTRAL','Calle Falsa');
			    INSERT INTO editorial (editorial_nombre, editorial_direccion_fiscal) VALUES ('BOOKET','Calle Falsa');
			    INSERT INTO editorial (editorial_nombre, editorial_direccion_fiscal) VALUES ('DEUSTO','Calle Falsa');
			    INSERT INTO editorial (editorial_nombre, editorial_direccion_fiscal) VALUES ('CLICK EDICIONES','Calle Falsa')
				/* Cargo libros */
				INSERT INTO libro (libro_isbn, libro_titulo, libro_descripcion, libro_volumen, libro_registro, libro_anio, libro_paginas, libro_edicion, editorial_id, tema_cdu, idioma_id) 
					VALUES ('', '', '', '', '', '', '', '', '', '', '', '');
				INSERT INTO libro (libro_isbn, libro_titulo, libro_descripcion, libro_volumen, libro_registro, libro_anio, libro_paginas, libro_edicion, editorial_id, tema_cdu, idioma_id) 
					VALUES ('', '', '', '', '', '', '', '', '', '', '', '');
				INSERT INTO libro (libro_isbn, libro_titulo, libro_descripcion, libro_volumen, libro_registro, libro_anio, libro_paginas, libro_edicion, editorial_id, tema_cdu, idioma_id) 
					VALUES ('', '', '', '', '', '', '', '', '', '', '', '');
				INSERT INTO libro (libro_isbn, libro_titulo, libro_descripcion, libro_volumen, libro_registro, libro_anio, libro_paginas, libro_edicion, editorial_id, tema_cdu, idioma_id) 
					VALUES ('', '', '', '', '', '', '', '', '', '', '', '');
				INSERT INTO libro (libro_isbn, libro_titulo, libro_descripcion, libro_volumen, libro_registro, libro_anio, libro_paginas, libro_edicion, editorial_id, tema_cdu, idioma_id) 
					VALUES ('', '', '', '', '', '', '', '', '', '', '', '')
			");

			if($query -> execute()){
				echo "La base de datos ha sido cargada";
			}
		}

		/*
		 * Recover data
		 */
		public function get($table, $value){
			$query = ConexionModel::conect()->prepare();
		}


	}
?>



if (isset($_POST['load'])) {

	
}



<form method="post">
	<input type="text" hidden value="ALIENTA EDITORIAL">
	<input type="submit" value="Cargar" name="load">
</form>
