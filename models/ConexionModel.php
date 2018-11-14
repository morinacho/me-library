<?php  
	
	class ConexionModel{

		public function conect(){
			/*
			 * La base de datos ha sido reducida para llegar al trabajo de base de datos
			 * Cambiar a la base de datos completa llamada me-library
			 */
			$link = new PDO("mysql:host = localhost; dbname = melibrary", "root", "");
			$link -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $link;
		}
	}
?>