<?php 
	require_once "ConexionModel.php";
	
	class UserModel{
		
		public function storeModel($request){
			//Enlaces de parametros
			$query = ConexionModel::conect()->prepare("INSERT INTO usuario (dni,nombre,apellido,direccion,telefono,mail) VALUES (:dni, :name, :lastname, :address, :phone, :mail");
			$query -> bindParam(":dni", $request["user-dni"], PDO::PARAM_INT);
			$query -> bindParam(":name", $request["user-name"], PDO::PARAM_STR);
			$query -> bindParam(":lastname", $request["user-lastname"], PDO::PARAM_STR);
			$query -> bindParam(":address", $request["user-address"], PDO::PARAM_STR);
			$query -> bindParam(":phone", $request["user-phone"], PDO::PARAM_STR);
			$query -> bindParam(":mail", $request["user-mail"], PDO::PARAM_STR);
			$query -> execute();
			
			
			
			/*
			$query = ConexionModel::conect()->prepare("INSERT INTO usuario (dni, nombre, apellido, direccion, telefono, mail, password) VALUES (:dni, :name, :lastname, :address, :phone, :mail, :password)");
			$query -> bindParam(":name", $request["user-name"], PDO::PARAM_STR);
			$query -> bindParam(":lastname", $request["user-lastname"], PDO::PARAM_STR);
			$query -> bindParam(":address", $request["user-address"], PDO::PARAM_STR);
			$query -> bindParam(":phone", $request["user-phone"], PDO::PARAM_STR);
			$query -> bindParam(":mail", $request["user-mail"], PDO::PARAM_STR);
			$query -> bindParam(":password", $request["user-password"], PDO::PARAM_STR);
			if($query -> execute()){
				return true;
			}
			else{
				return false;
			}
			
			$query -> close();
		*/

		}
		/*
		public function createModel(){
			try{
				$query = ConexionModel::conect()->prepare("SELECT dni, nombre, apellido,direccion,telefono,mail FROM usuario ORDER BY apellido");			 
		        $query->execute();
		        $response = $query->fetchAll();
		        return $response;  
			}
			catch(PDOException $exception) {
			    return "Error: " . $exception->getMessage();
			}
		}
		*/
	}
?>