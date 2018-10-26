<?php
	class EditorialController{

#view editorial
		public function create(){
			$response = EditorialModel::createModel(); 
			return $response;
		}
#create editorial
		public function store(){
			$request=array("editorial-name"    => $_POST["editorial-name"],
						   "editorial-address" => $_POST["editorial-address"]); 
			$response = EditorialModel::storeModel($request); 

			if ($response){
				echo '<div class="alert alert-success" role="alert">Editorial creada<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}
			else{
				echo "error";
			}
			header('Location:../views/modules/admin/books/index.php');		
		}
	}

?>
