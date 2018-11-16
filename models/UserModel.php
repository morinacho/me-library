<?php 
	require_once "ConexionModel.php";
	
	class UserModel{
		
		public function storeModel($request){
			//Enlaces de parametros
			$query = ConexionModel::conect()->prepare("INSERT INTO usuario (usuario_dni,usuario_nombre,usuario_apellido,usuario_direccion,usuario_telefono,usuario_mail, usuario_password) 
													   VALUES (:usuario_dni, :usuario_nombre, :usuario_apellido, :usuario_direccion, :usuario_telefono, :usuario_mail, :usuario_password)");
			
			$query -> bindParam(":usuario_dni", $request["user-dni"], PDO::PARAM_INT);
			$query -> bindParam(":usuario_nombre", $request["user-name"], PDO::PARAM_STR);
			$query -> bindParam(":usuario_apellido", $request["user-lastname"], PDO::PARAM_STR);
			$query -> bindParam(":usuario_direccion", $request["user-address"], PDO::PARAM_STR);
			$query -> bindParam(":usuario_telefono", $request["user-phone"], PDO::PARAM_STR);
			$query -> bindParam(":usuario_mail", $request["user-mail"], PDO::PARAM_STR);
			$query -> bindParam(":usuario_password", $request["user-dni"], PDO::PARAM_INT);
			
			if($query -> execute()){
				return "success";
			}
			else{
				return "error";
			}
			
			$query -> close();
			

		}

		
		public function createModel(){
			try{
				$query = ConexionModel::conect()->prepare("SELECT usuario_dni, usuario_nombre, usuario_apellido, usuario_telefono, usuario_mail 
														   FROM usuario 
														   ORDER BY usuario_apellido");			 
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