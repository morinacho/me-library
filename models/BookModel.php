<?php
	require_once "ConexionModel.php";
	class BookModel{

		public function storeModel($request){

		 	$query = ConexionModel::conect()->prepare("INSERT INTO libro (isbn, titulo,tema_cdu,descripcion,volumen,año, paginas,edicion, ejemplar_unico,idioma_ididioma,editorial_id_editorial) VALUES (:isbn,:titulo,:cdu,:descripcion,:volumen,:año,:paginas,:edicion,:ejemplar_unico,:id_idioma,:id_editorial)");

 
			//Enlaces de parametros
			
			$query -> bindParam(":isbn", $request["isbn"], PDO::PARAM_INT);
			$query -> bindParam(":titulo", $request["book-title"], PDO::PARAM_STR);
			$query -> bindParam(":cdu",$request["cdu"] , PDO::PARAM_INT);
			$query -> bindParam(":descripcion", $request["book-description"], PDO::PARAM_STR);
			$query -> bindParam(":volumen", $request["book-volumen"], PDO::PARAM_INT);
			$query -> bindParam(":año", $request["book-year"], PDO::PARAM_STR);
			$query -> bindParam(":paginas", $request["book-pag"], PDO::PARAM_INT);
			$query -> bindParam(":edicion", $request["book-edicion"], PDO::PARAM_STR);
			$query -> bindParam(":ejemplar_unico", true, PDO::PARAM_BOOL);
			$query -> bindParam(":id_idioma",$request["book-languaje"] , PDO::PARAM_INT);
			$query -> bindParam(":id_editorial",1, PDO::PARAM_INT);


			if($query -> execute()){
				return true;
			}
			else{
				return false;
			}

		
		}

	}


?>