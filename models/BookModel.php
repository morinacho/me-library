<?php
	require_once "ConexionModel.php";
	class BookModel{

		public function storeModel($request){

			//Enlaces de parametros
			//Enlaces de parametros
		 	$query = ConexionModel::conect()->prepare("INSERT INTO libro (isbn,titulo,tema_cdu,descripcion,volumen,ano,paginas,edicion,editorial_id_editorial,idioma_id_idioma) 
		 		VALUES(:isbn,:titulo,:cdu,:descripcion,:volumen,:ano,:paginas,:edicion,'2',:id_idioma);
		 	 
		 	INSERT INTO libro_has_autor (libro_isbn,autor_id_autor) VALUES (:isbn,:id_autor)");
				
				
			//Enlaces de parametros
			
			$query -> bindParam(":isbn", $request["isbn"], PDO::PARAM_INT);
			$query -> bindParam(":titulo", $request["book-title"], PDO::PARAM_STR);
			$query -> bindParam(":cdu",$request["cdu"] , PDO::PARAM_INT);
			$query -> bindParam(":descripcion", $request["book-description"], PDO::PARAM_STR);
			$query -> bindParam(":volumen", $request["book-volumen"], PDO::PARAM_INT);
			$query -> bindParam(":ano", $request["book-year"], PDO::PARAM_STR);
			$query -> bindParam(":paginas", $request["book-pag"], PDO::PARAM_INT);
			$query -> bindParam(":edicion", $request["book-edicion"], PDO::PARAM_STR);
			$query -> bindParam(":id_autor", $request["select-autors"], PDO::PARAM_INT);
			$query -> bindParam(":id_idioma",$request["book-languaje"] , PDO::PARAM_INT);
			#$query -> bindParam(":id_editorial",$request["select-editorial"], PDO::PARAM_INT);


			if($query -> execute()){
				return true;

			}
			else{
				return false;
			}
			$query -> close();
		
		}

	}


?>