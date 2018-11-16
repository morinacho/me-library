<?php 

	class UserController{
	##Insertar Usuario	
		public function store(){
			if(isset($_POST["save-user"])){
			$request = array("user-dni"       => $_POST["user-dni"],
						  	 "user-name"      => $_POST["user-name"],
						  	 "user-lastname"  => $_POST["user-lastname"],
						  	 "user-address"   => $_POST["user-address"],
						  	 "user-phone"     => $_POST["user-phone"],
						  	 "user-mail"      => $_POST["user-mail"],
						  	 "user-password"  => $_POST["user-dni"]);

			$response = UserModel::storeModel($request);
					if ($response == "success"){
						//header("location:index.php?action=ok");
					}
			}
		}

		public function create(){
			$response = UserModel::createModel(); 
			return $response;
		}
		
		
	}
?>