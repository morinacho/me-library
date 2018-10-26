<?php 
	require_once "ConexionModel.php";
	
	class AuthorModel{

		public function storeModel($request){
			$query = ConexionModel::conect()->prepare("INSERT INTO autor (dni, nombre, apellido) VALUES (:dni, :name, :lastname)");
			
			//Enlaces de parametros
			$query -> bindParam(":dni", $request["dni"], PDO::PARAM_INT);
			$query -> bindParam(":name", $request["autor-name"], PDO::PARAM_STR);
			$query -> bindParam(":lastname", $request["autor-lastname"], PDO::PARAM_STR);
			
			if($query -> execute()){
				return true;
			}
			else{
				return false;
			}
			
			$query -> close();

		}


/*
		public function createModel(){
			try{
				$query = ConexionModel::conect()->prepare("SELECT nombre, apellido FROM autor ORDER BY nombre");			 
		        $query->execute();
		        $response = $query->fetchAll();
		        return $response;  
			}
			catch(PDOException $exception) {
			    return "Error: " . $exception->getMessage();
			}
		}*/

	}
?>