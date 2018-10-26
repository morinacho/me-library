<?php 

	class UserController{
		
		public function store(){
			$request = array("user-dni"       => $_POST["user-dni"],
						  	 "user-name"      => $_POST["user-name"],
						  	 "user-lastname"  => $_POST["user-lastname"],
						  	 "user-address"   => $_POST["user-address"],
						  	 "user-phone"     => $_POST["user-phone"]);

			$response = UserModel::storeModel($request);
			if ($response){
				echo "Datos guardados";
			}
			else{
				echo "error";
			}
		}
	}
?>