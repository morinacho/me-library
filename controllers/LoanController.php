<?php 
	
	class LoanController{
		
		public function store(){
			if(isset($_POST["newloan"])){
				$request=array("usuario_dni" => $_POST["LoanUser"],
							   "libro_isbn"  => $_POST["LoanBook"]);											

				$response = LoanModel::storeModel($request);
				echo $response;
				/*if ($response=="success") {
					header("location:index.php?action=ok");
				}*/
			} 
		}

		public function create(){
			$response = LoanModel::createModel();
			return $response;
		}
	}
?>