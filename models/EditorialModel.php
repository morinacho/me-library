<?php
require_once "ConexionModel.php";
class EditorialModel{
	#insertar editorial
	public function storeModel($request){
	$query = ConexionModel::conect()->prepare("INSERT INTO editorial (nombre, direccion_fiscal) VALUES (:nombre, :direccion_fiscal)");


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


###ver  editorial

	public function createModel($table){
			
			$query=ConexionModel::conect()->prepare("SELECT nombre FROM $table ");
			$query->execute();
			#$query->query();
 			return $query->fetchAll(PDO::FETCH_COLUMN, 0);
			
			 $query->close();

	}
	
}





?>