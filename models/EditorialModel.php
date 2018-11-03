<?php
	require_once "ConexionModel.php";

	class EditorialModel{

###ver editorial 
		public function createModel(){
			try{
				$query = ConexionModel::conect()->prepare("SELECT editorial_nombre, id_editorial FROM editorial ORDER BY editorial_nombre");			 
		        $query->execute();
		        $response = $query->fetchAll();
		        return $response;  
			}
			catch(PDOException $exception) {
			    return "Error: " . $exception->getMessage();
			}
		}
		/*
		 * Metodo para agregar una nueva editorial 
		 */
		public function storeModel($request){
			try{
				$query = ConexionModel::conect()->prepare("INSERT INTO editorial (editorial_nombre, direccion_fiscal) VALUES (:nombre, :direccion_fiscal)");

				//Enlaces de parametros
				$query -> bindParam(":nombre", $request["editorial-name"], PDO::PARAM_STR);
				$query -> bindParam(":direccion_fiscal", $request["editorial-address"], PDO::PARAM_STR);
				
				
				if($query -> execute()){
					return true;
				}
				else{
					return false;
				}
			}
			catch(PDOException $exception) {
			    return "Error: " . $exception->getMessage();
			}
		}	
	}



