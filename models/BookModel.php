<?php
	require_once "ConexionModel.php";
	class BookModel{

		public function storeModel($request){

		 	$query = ConexionModel::conect()->prepare("INSERT INTO libro (libro_isbn,libro_titulo,tema_cdu,libro_descripcion,libro_volumen,libro_anio,libro_paginas,libro_edicion,editorial_id,idioma_id) 
		 		VALUES(:isbn,:titulo,:cdu,:descripcion,:volumen,:anio,:paginas,:edicion,:id_editorial,:id_idioma);
		 	INSERT INTO libro_has_autor (libro_isbn,autor_id_autor) VALUES (:isbn,:id_autor)");
				
				
			//Enlaces de parametros
			
			$query -> bindParam(":isbn", $request["isbn"], PDO::PARAM_INT);
			$query -> bindParam(":titulo", $request["book-title"], PDO::PARAM_STR);
			$query -> bindParam(":cdu",$request["cdu"] , PDO::PARAM_INT);
			$query -> bindParam(":descripcion", $request["book-description"], PDO::PARAM_STR);
			$query -> bindParam(":volumen", $request["book-volumen"], PDO::PARAM_INT);
			$query -> bindParam(":anio", $request["book-year"], PDO::PARAM_STR);
			$query -> bindParam(":paginas", $request["book-pag"], PDO::PARAM_INT);
			$query -> bindParam(":edicion", $request["book-edicion"], PDO::PARAM_STR);
			$query -> bindParam(":id_autor", $request["select-autors"], PDO::PARAM_INT);
			$query -> bindParam(":id_idioma",$request["book-languaje"] , PDO::PARAM_INT);
			$query -> bindParam(":id_editorial",$request["select-editorial"], PDO::PARAM_INT);


			if($query -> execute()){
				return true;

			}
			else{
				return false;
			}
			$query -> close();
		}


		public function createModel(){
			try{
				$query = ConexionModel::conect()->prepare("
				SELECT book.libro_isbn,book.libro_titulo,auth.autor_apellido,auth.autor_nombre,edi.nombre  
				FROM libro book,autor auth,editorial edi,libro_has_autor libAut
				WHERE book.editorial_id=edi.id_editorial And
				       book.libro_isbn=libAut.libro_isbn And
				        auth.autor_id=libAut.autor_id_autor");

		        $query->execute();
		        $response = $query->fetchAll();
		        return $response;  
			}
			catch(PDOException $exception) {
			    return "Error: " . $exception->getMessage();
			}
		}


		public function searchBookModel($name){

			try{
				$query = ConexionModel::conect()->prepare("
					SELECT book.libro_titulo
					FROM libro book
					WHERE book.libro_titulo=:titulo");
				$query -> bindParam(":titulo", $name["book-title"], PDO::PARAM_STR);
		        $query->execute();
		        $response = $query->fetchAll();
		        return $response;  
			}
			catch(PDOException $exception) {
			    return "Error: " . $exception->getMessage();
			}

		}
	}


?>