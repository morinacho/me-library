<?php 
	require_once "ConexionModel.php";
	
	class UserModel{

		public function storeModel($request){
			$query = ConexionModel::conect()->prepare("INSERT INTO usuario (dni, nombre, apellido,direccion,telefono,mail,password) VALUES (:dni, :name, :lastname, :address, :phone, :mail, :password)");
			
			//Enlaces de parametros
			$query -> bindParam(":dni", $request["dni"], PDO::PARAM_INT);
			$query -> bindParam(":name", $request["usuario-name"], PDO::PARAM_STR);
			$query -> bindParam(":lastname", $request["usuario-lastname"], PDO::PARAM_STR);
			$query -> bindParam(":address", $request["usuario-address"], PDO::PARAM_STR);
			$query -> bindParam(":phone", $request["usuario-phone"], PDO::PARAM_STR);
			//$query -> bindParam(":password", $request["dni"], PDO::PARAM_STR);

			
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