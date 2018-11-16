<?php 
	require_once "ConexionModel.php";
	
	class AuthModel{
		public function loginModel($request){
			if($request["admin"] == "on"){
				$query = ConexionModel::conect()->prepare("SELECT mail, password 
														   FROM administrador 
														   WHERE mail = :mail 
														   AND password = :password");
			}
			else{	
				$query = ConexionModel::conect()->prepare("SELECT mail, password 
														   FROM usuario 
														   WHERE mail = :mail 
														   AND password = :password");
			}
			//Enlaces de parametros
			$query -> bindParam(":mail", $request["mail"]);
			$query -> bindParam(":password", $request["password"]);
			$query -> execute();
			return $query -> fetch();
			$query -> close();
		}
	}
?>