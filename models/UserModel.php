<?php 
	require_once "ConexionModel.php";
	
	class UserModel{

		public function storeModel($request){
			$query = ConexionModel::conect()->prepare("INSERT INTO usuario (dni, nombre, apellido, direccion, telefono, mail, password) VALUES (:dni, :name, :lastname, :address, :phone, :mail, :password)");
			
			//Enlaces de parametros
			$query -> bindParam(":dni", $request["user-dni"], PDO::PARAM_INT);
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

		}
	}
?>