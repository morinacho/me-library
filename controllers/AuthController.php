<?php 
	
	class AuthController{
		
		public function login(){
			if (!isset($_POST["admin"])) {
				$_POST["admin"] = "off";
			}
			$request = array("mail"     => $_POST["email"],
						  	 "password" => $_POST["password"],
						  	 "admin"    => $_POST["admin"]);
			$response = AuthModel::loginModel($request);

			if($response["mail"] == $_POST["email"] && $response["password"] == $_POST["password"]){
				if ($_POST["admin"] == "on"){
					header("location:../admin/index.php");
				}
				else{
					header("location:../private/index.php");
				} 
			}
			else{
				echo'<div class="alert alert-danger alert-dismissible fade show col-12 text-center" id="error-login" role="alert">
  						<strong>Error al iniciar sesión</strong><br> 
  						El email o contraseña no son correctos. Asegurate de tildar el check si deseas iniciar como administrador.
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    						<span aria-hidden="true">&times;</span>
  						</button>
					</div>';
			}
		}	
	}
?>