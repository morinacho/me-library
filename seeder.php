<?php 
	include_once("models/ConexionModel.php");
	
	class Seeder{
		/*
		 * Create data base
		 */
		public function create(){
			$servername = "localhost";
			$username = "root";
			$password = "";

			try {
			    $conexion = new PDO("mysql:host=$servername", $username, $password);
			    // set the PDO error mode to exception
			    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    //$conexion->exec("CREATE DATABASE melibrary DEFAULT CHARACTER SET utf8;");
			    
			    $query = ConexionModel::conect()->exec("
					CREATE TABLE tema (
						tema_cdu INT NOT NULL,
					  	tema_nombre VARCHAR(45) NULL,
					  	PRIMARY KEY (tema_cdu),
					  	UNIQUE INDEX cdu_UNIQUE (tema_cdu ASC))

					  	
			    ");

			    $query->execute();

			    echo "La base de datos has sido creada";
			}
			catch(PDOException $e){
		    	echo $e->getMessage();
		    }

			$conexion = null;	 
		}

		/*
		 * Load data base
		 */
		public function load(){
			$query = ConexionModel::conect()->prepare("
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
			");

			if($query -> execute()){
				echo "La base de datos ha sido cargada";
			}
		}

		/*
		 * Recover data
		 */
		public function get($table, $column, $value){
			try{
				$query = ConexionModel::conect()->prepare( "SELECT {$column} FROM {$table}");

		        $query->execute();
		        
		        $response = $query->fetchAll(); 

		        foreach ($response as $key => $value) {
		        	echo $value[0]." - "; 
		        }
		         
			}
			catch(PDOException $exception) {
			    return "Error: " . $exception->getMessage();
			}
		}

		/*
		 * Delete data
		 */
		public function delete(){
			$query = ConexionModel::conect()->prepare("
				DELETE FROM prestamo;
				DELETE FROM libro_has_autor;
				DELETE FROM libro_has_catalogo;
				DELETE FROM libro;
				DELETE FROM autor;
				DELETE FROM editorial;
				DELETE FROM tema;
				DELETE FROM idioma;
				DELETE FROM administrador;
				DELETE FROM usuario;
			");
			if ($query->execute()) {
				echo "Base de datos limpia";
			}
		}
	}
?>

<form method="post">
	<input type="submit" value="Cargar" name="load">
</form>

<form method="post">
	<input type="submit" value="Limpiar" name="delete">
</form>

<form method="post">
	<input type="submit" value="Crear" name="create">
</form>

<?php 
	$seeder = new Seeder();
	
	if (isset($_POST['load'])) {
		$seeder->load();
	}

	if (isset($_POST['delete'])) {
		$seeder->delete();
	}

	if (isset($_POST['create'])) {
		$seeder->create();
	}
?>