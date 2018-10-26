<?php 

	class AuthorController{
		
		public function store(){
			$request = array("autor-name"     => $_POST["autor-name"],
						  	 "autor-lastname" => $_POST["autor-lastname"]);
						  	 

			$response = AuthorModel::storeModel($request);
			if ($response){
				echo '<div class="alert alert-success" role="alert">Author creado<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}
			else{
				echo "error";
			}
			header('Location:../views/modules/admin/books/index.php');	
		}


		public function create(){
			$response = AuthorModel::createModel(); 
			return $response;
		}
	}
?>